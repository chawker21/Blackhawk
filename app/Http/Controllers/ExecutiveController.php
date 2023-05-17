<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\executive_branch;
use App\Models\presidents_succession;
use App\Models\ukraine;

class ExecutiveController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index(){
        $executive_branch = executive_branch::all();
        return view('/Executive_Branch/index', compact('executive_branch'));
    }
    public function ukraine(){
        $ukraine = ukraine::all();
        return view('/Executive_Branch/ukraine', compact('ukraine'));
    }

    public function administration(){
        $executive_branch = executive_branch::all();

        return view('/Executive_Branch/administration', compact('executive_branch'));
    }

    public function succession(){
        $successors = presidents_succession::all();

        return view('/presidents/succession', compact('successors'));
    }
}
