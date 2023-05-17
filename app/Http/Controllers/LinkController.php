<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\link;
use App\Models\costa;

class LinkController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index(){
        $links = link::all();
        $costas = costa::where('reference', '=', 'cat')->get();
        return view('/app/welcome', compact('links', 'costas'));
    }

}
