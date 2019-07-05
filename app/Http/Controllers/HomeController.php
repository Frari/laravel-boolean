<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view ('homeBoolean');
  }
  public function privacyPolicy(){
    return view ('privacy-policy');
  }
  public function lavoraConNoi(){
    return view ('lavora-con-noi');
  }

}
