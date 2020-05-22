<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalReturnRequest;
use Validator;
use App\Rental;
use App\Document;
class RentalReturnController extends Controller
{
  public function index(Request $request)
  {
    return view('returns.returns', ['msg'=>'資料IDを入力して下さい。']);
  }
  public function post(Request $request)
  {
    //カタログIDが入力されているかチェック
    $rules = [
      'catalog_id' => 'required|integer',
    ];

   $messages = [
     'catalog_id.required' => '資料IDは必ず入力して下さい。',
      'catalog_id.integer' => '資料IDには数字を入力してください。',
   ];
   $validator = Validator::make($request->all(), $rules,
   $messages);

   if ($validator->fails()) {
     return redirect('/returns')
     ->withErrors($validator)
     ->withInput();
   }
   //資料テーブルにカタログIDが存在するかチェック
    $item = Document::where('catalog_id', $request->catalog_id)->first();
    if ($item === NULL) {
    $validator->errors()->add('no_catalog', 'この資料は存在しません。');
    return redirect('/returns')
    ->withErrors($validator)
    ->withInput();
  }
   //貸出台帳にカタログIDが存在するかチェック
   $item = Rental::where('catalog_id', $request->catalog_id)->whereNull('rental_returndate')->orderBy('rental_id', 'desc')->first();
   // $item = DB::table('rentals')->where('catalog_id', $request->catalog_id)->whereNull('rental_returndate')->first();
   if ($item === NULL) {
   $validator->errors()->add('no_rental', 'この資料は貸し出されていません。');
   return redirect('/returns')
   ->withErrors($validator)
   ->withInput();
   }
   //貸出台帳テーブルへ返却日（今日の日付）を自動で入力する
   $rental_item = Rental::where('catalog_id', $request->catalog_id)->whereNull('rental_returndate');
   $param = ['rental_returndate' => date("Y/m/d")];
     $data = $rental_item->update($param);
   //処理完了
    return view('returns.return_complete');

}}
