<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function search_member(){
      return view('member_search');
    }
    public function find_member(Request $request){
      return view('member_search_result', ['user_email'=>$request]);
    }
}
