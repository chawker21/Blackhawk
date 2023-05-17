<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ubot;

class UbotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ubot = ubot::orderBy('id', 'asc')->get();

        return view('/ubots/index', compact('ubot'));
    }
    public function getubots(Request $request) {

        $ubot = ubot::where('link', '=', $request->ubot)->first();

        return view('/ubots/pages/'.$ubot->link, compact('ubot'));
    }

    public function main(Request $request)
    {
        $ubot = ubot::orderBy('id', 'asc')->get();
        $recent = ubot::orderBy('created_at', 'asc')->take(3)->get();
        return view('/main', compact('ubot', 'recent'));
    }

    public function ubots() {
        $ubot = ubot::orderBy('id', 'asc')->get();
        return view('ubots', compact('ubot'));
    }

    public function ubotUpload()
    {

        return view('/ubots/ubotUpload');
    }

    public function store(Request $request)
    {
        $ubot = ubot::create(

            request(['title', 'body', 'keywords', 'link'])
        );

        $ubot->save();
//
//        flash('Your message has been sent!')->success();

        return redirect()->route('/ubots/index');
    }
}
