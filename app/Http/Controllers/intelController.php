<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\intel;

class intelController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index()
    {
        $intel = intel::all();
        return view('/intel/index', compact('intel'));
    }
//    public function getintel(Request $request)
//    {
//
//        $intel = intel::where('title', '=', $request->intel)->first();
//        return view('/intel/' . $intel->title, compact('intel'));
//    }
    public function getintel()
    {

        shell_exec("python /intel_resources/insert_file_names_to_database.py  2>&1");
        return back();
    }
}
