@extends('layouts.form')
@section('content')
@error('catalog_id')
<p>{{$message}}</p>
@enderror
<p>{{$msg}}</p>
  <form method="post" action="/return_complete">
   @csrf
   <tr><th>資料ID </th><td><input type="text"
     name="catalog_id"></td></tr>
     <input type="button" value="＋">
    <input type="submit" value="返却">
  </form>
@endsection
