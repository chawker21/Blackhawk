<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DC;
use App\Models\dc_img;
use App\Models\stone_maine;
class DCController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $pages = dc_img::where('category', '=', 'directory')->where('type', '!=', 'assets')->get();

        return view('/DC/pages/index', compact('pages'));
    }


    public function getDCPage(Request $request) {

        $page = dc_img::where('title', '=', $request->page)->first();
        $img = dc_img::where('category', '=', $page->title)->get();
        return view('/DC/pages/page', compact('img', 'page'));
    }

}
