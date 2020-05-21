<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/after_login_top', function(){
  return view('after_login_top');
});
Route::get('/member_search', function (){
  return view('member_search');
});
Route::get('/member_search_result', function (){
  return view('member_search_result');
});
Route::post('/member_search_result', 'MemberController@find_member');
Route::get('/returns', 'RentalReturnController@index');
Route::get('/return_complete', function (){
  return view('return_complete');
});
Route::post('/return_complete', 'RentalReturnController@post');
