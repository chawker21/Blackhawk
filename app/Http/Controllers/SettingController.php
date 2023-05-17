<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sync;
use DB;
use File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      sync::chebfiles();
//      sync::bornfiles();
        sync::civilfiles();
        sync::civilidfiles();

        return view('Pages.saved');
    }


    public function storepath(Request $request)
    {
        sync::mp4files();
        sync::pdffiles();
        sync::chebfiles();

        return view('index');
    }


}
