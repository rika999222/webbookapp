<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Person;
use Illuminate\Http\Request;

class RentalReturn extends Model
{
  public function index(Request $request)
  {
    $items = RentalReturn::all();
    return view('return')
  }
}
