<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YTController extends Controller
{
   public function yt(){
       return view('/YT/yt');
   }
}
