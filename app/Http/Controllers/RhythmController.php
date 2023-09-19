<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use carbon;
use App\Models\Rhythm;

class RhythmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{

    $currenttime = Carbon\Carbon::now()->format('m-d-Y');
    return view('/rhythm/index', compact('currenttime'));
}
    public function index13()
    {

        $currenttime = Carbon\Carbon::now()->format('m-d-Y');
        return view('/rhythm/index-13', compact('currenttime'));
    }
    public function menu()
    {

        $currenttime = Carbon\Carbon::now()->format('m-d-Y');
        return view('/rhythm/menu', compact('currenttime'));
    }
    public function store(Request $request)
    {
        $rhythm = Rhythm::create(

            request(['name', 'email', 'message'])
        );
        $rhythm->save();
//
//        flash('Your message has been sent!')->success();

        return redirect()->route('/rhythm/index');
    }
}
