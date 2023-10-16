<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
  public function train()
  {
    $trains = Train::all();
    return view('home', compact('trains'));
  }
}