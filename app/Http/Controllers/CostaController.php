<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\costa;

class CostaController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $costas = costa::where('reference', '=', 'cat')->get();

        return view('/costa/index', compact('costas'));
    }
    public function video(){
        $costas = costa::where('reference', '=', 'video')->paginate(1);


        return view('/costa/pages/video', compact('costas'));
    }
    public function photo(){
        $costas = costa::where('reference', '=', 'photo')->paginate(1);


        return view('/costa/pages/photo', compact('costas'));
    }


}
