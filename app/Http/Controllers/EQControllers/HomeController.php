<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\GMcommand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //todo fix eqemu logo to align horizontally with Chawker21.blue/
        return view('/EQemu/index');
    }

    public function commandlist()
    {
        $command = GMcommand::all();
        return view('/EQemu/resources/commands', compact('command'));
    }
}
