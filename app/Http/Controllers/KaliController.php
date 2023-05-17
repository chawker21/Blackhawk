<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kali;

class KaliController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index() {
        $kali = kali::orderBy('id', 'asc')->get();

        return view('Kali/index', compact('kali'));

    }
    public function Deauth() {
        return view('Kali.deauth');
    }
    public function getkali(Request $request) {

        $kali = kali::where('link', '=', $request->kali)->first();
        return view('/Kali/'.$kali->link, compact('kali'));
    }

    public function main(Request $request)
    {
        $kali = kali::orderBy('id', 'asc')->get();
        $recent = kali::orderBy('created_at', 'asc')->take(3)->get();
        return view('/main', compact('kali', 'recent'));
    }

    public function kalis() {
        $kali = kali::orderBy('id', 'asc')->get();
        return view('Kali', compact('kali'));
    }


    public function guideUpload()
    {

        return view('/guides/guideUpload');
    }
    public function store(Request $request)
    {
        $Kali = Kali::create(

            request(['title', 'body', 'keywords', 'link'])
        );

        $Kali->save();
//
//        flash('Your message has been sent!')->success();

        return redirect()->route('/Kali/index');
    }


}
