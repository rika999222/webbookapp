<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalReturnRequest;
use Validator;

class RentalReturnController extends Controller
{
  public function index(Request $request)
  {
    return view('returns.returns', ['msg'=>'資料IDを入力下さい。']);
  }
  public function post(Request $request)
  {
    $rules = [
      'catalog_id' => 'required',
    ];

   $messages = [
     'catalog_id.required' => '資料IDを入力して下さい。',
   ];
   $validator = Validator::make($request->all(), $rules,
   $messages);

   if ($validator->fails()) {
     return redirect('/returns')
     ->withErrors($validator)
     ->withInput();
   }
    return view('returns.return_complete');
  }

  public function search(Request $request)
{
  $item = RentalReturn::where('resisters', $request->catalog_id)->first();
  if ($item === ) {
  return redirect('/returns')
  ->withErrors($validator)
  ->withInput();
}
}}
