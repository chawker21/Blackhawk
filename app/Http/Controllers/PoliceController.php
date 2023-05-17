<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\police;
class PoliceController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $incidents = police::orderBy('id', 'asc')->get();

        return view('/police/index', compact('incidents'));
    }
}
