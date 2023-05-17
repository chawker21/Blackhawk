<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function csvdata()
    {


        return view('data2');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function test()
    {


        shell_exec("C:\Users\chris\PycharmProjects\My_Scripts\Blackhawk\Scripts\python C:\wamp\www\BlackhawkBlog\public\app_resources\python\main.py 2>&1");
        return redirect()->back();


    }
    public function beta(){

        return view('beta');
    }
}
