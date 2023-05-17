<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TDAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tdatoken()
    {
        return view('/TDA/tdatoken');
    }
}
