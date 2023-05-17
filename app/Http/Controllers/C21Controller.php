<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon;
use App\Models\C21;

class C21Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $item = C21::all();
        $breaking = C21::where('breaking', '=', true)->get();
        $popular = C21::where('popular', '=', true)->get();
        $hot = C21::where('hot', '=', true)->get();
        $hot2 = C21::where('hot2', '=', true)->get();
        $currenttime = Carbon\Carbon::now()->format('m-d-Y');
        return view('/C21/index', compact('currenttime', 'item', 'breaking', 'popular', 'hot', 'hot2'));
    }
}
