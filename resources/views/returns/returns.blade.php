@extends('layouts.form')
@section('title', '返却画面')
@section('content')
@error('catalog_id')
<span class="errorMsg">{{$message}}</span>
@enderror
@error('no_rental')
<span class="errorMsg">{{$message}}</span>
@enderror
@error('no_catalog')
<span class="errorMsg">{{$message}}</span>
@enderror
<p>{{$msg}}</p>
  <form method="post" action="/return_complete">
   @csrf
   <tr><th>資料ID </th><td><input type="text"
     name="catalog_id"></td></tr>
    <input type="submit" value="返却">
  </form>
@endsection
