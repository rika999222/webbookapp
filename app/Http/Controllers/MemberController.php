<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;

class MemberController extends Controller
{
    public function search_member(){
      return view('member_search');
    }

    public function find_member(Request $request)
    {
      $user_email = $request->user_email;
      $item = DB::table('members')->where('user_email', $user_email)->first();
       return view('member_search_result', ['user_email' => $user_email, 'item' => $item]);
    }

    public function index(Request $request)
    {
      return view('member_search', ['msg'=>'メールアドレスを入力して下さい。']);
    }
    public function post(Request $request)
    {
      //メールアドレスが入力されているかチェック
      $rules = [
        'user_email' => 'required',
      ];

     $messages = [
       'user_email.required' => 'メールアドレスは必ず入力して下さい。',
     ];
     $validator = Validator::make($request->all(), $rules,
     $messages);

     if ($validator->fails()) {
       return redirect('/member_search')
       ->withErrors($validator)
       ->withInput();
     }
     //会員テーブルにメールアドレスが存在するかチェック
      $item = Document::where('user_email', $request->user_email)->first();
      if ($item === NULL) {
      $validator->errors()->add('no_user_email', 'このメールアドレスは存在しません。');
      return redirect('/member_search')
      ->withErrors($validator)
      ->withInput();
    }
}}
