<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storm;

class StormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $storm = storm::all();
        return view('/storm/galleria', compact('storm'));
    }
}
