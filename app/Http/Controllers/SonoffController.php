<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sonoff;

class SonoffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sonoff()
    {
        $sonoffs = sonoff::all();
        return view('/homeauto/sonoff', compact('sonoffs'));
    }
}
