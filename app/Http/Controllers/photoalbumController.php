<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\photoalbums;
use App\Models\directory_list;
use App\Models\photo;

class photoalbumController extends Controller
{
    //
//public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index()
    {
        //DB::table('photoalbums')->truncate();
        //DB::table('photos')->truncate();
        //shell_exec("C:\Users\chris\PycharmProjects\My_Scripts\Blackhawk\Scripts\python C:\wamp\www\BlackhawkBlog\public\app_resources\python\get_photoalbums.py 2>&1");
        $photoalbums = photoalbums::all();
        return view('/photoalbums/index', compact('photoalbums'));
    }

    public function getphotoalbums(Request $request)
    {


        $photoalbums = photoalbums::where('title', '=', $request->photoalbums)->first();
        $photo = photo::all();
        $directory = directory_list::all();
        return view('/photoalbums/pages/photoalbums', compact('photoalbums', 'photo', 'directory'));
    }

    public function getphotoalbumsPage(Request $request)
    {

        $page = exotic::where('title', '=', $request->page)->first();

        return view('/exotic/pages/page', ['page' => $page->title]);
    }
}
