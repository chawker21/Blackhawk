<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exotic;

class exoticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pages = exotic::orderBy('id', 'asc')->get();

        return view('/exotic/pages/index', compact('pages'));
    }
    public function getexoticPage(Request $request) {

        $page = exotic::where('title', '=', $request->page)->first();

        return view('/exotic/pages/page', ['page' => $page->title]);
    }

}
