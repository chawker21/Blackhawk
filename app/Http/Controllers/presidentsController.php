<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\presidents;
use App\Models\presidents_succession;

class presidentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $presidents = presidents::orderBy('id', 'asc')->get();

        return view('/presidents/index', compact('presidents'));
    }

    public function getPresident(Request $request) {

        $presidents = presidents::where('president', '=', $request->president)->first();
        return view('/presidents/pages/president', compact('presidents'));
    }

    public function Timeline(){
        $presidents = presidents::paginate(5);
        return view('/presidents/timeline', compact('presidents'));
    }

}
