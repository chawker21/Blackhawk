<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cspan;

class CspanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $cspan = cspan::all();

        return view('/cspan/index', compact('cspan'));
    }
}
