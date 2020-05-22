<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
use App\Document;
use Validator;

class MemberController extends Controller
{
    public function search_member(){
      return view('member_search', ['msg'=>'メールアドレスを入力して下さい。']);
    }

    public function find_member(Request $request)
    {
      //メールアドレスが入力されているかチェック
      $member_search_rules = [
        'user_email' => 'required|email',
      ];

     $member_search_messages = [
       'user_email.required' => 'メールアドレスは必ず入力して下さい。',
       'user_email.email' => '正しいメールアドレスの形で入力してください。'
     ];
     $validator = Validator::make($request->all(), $member_search_rules,
     $member_search_messages);

     if ($validator->fails()) {
       return redirect('/member_search')
       ->withErrors($validator)
       ->withInput();
     }
     //会員テーブルにメールアドレスが存在するかチェック
      // $item = Document::where('user_email', $request->user_email)->first();
      $user_email = $request->user_email;
      $item = DB::table('members')->where('user_email', $user_email)->first();
      if ($item === NULL) {
        $validator->errors()->add('no_user_email', 'このメールアドレスは存在しません。');
        return redirect('/member_search')
        ->withErrors($validator)
        ->withInput();
      }

       return view('member_search_result', ['user_email' => $user_email, 'item' => $item]);
    }

  }
