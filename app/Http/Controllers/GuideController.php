<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guide;
class GuideController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $guide = guide::orderBy('id', 'asc')->get();

        return view('/guides/index', compact('guide'));
    }
    public function getGuide(Request $request) {

        $guide = guide::where('link', '=', $request->guide)->first();
        return view('/guides/pages/'.$guide->link, compact('guide'));
    }

    public function main(Request $request)
    {
        $guide = guide::orderBy('id', 'asc')->get();
        $recent = guide::orderBy('created_at', 'asc')->take(3)->get();
        return view('/main', compact('guide', 'recent'));
    }

    public function guides() {
        $guide = guide::orderBy('id', 'asc')->get();
        return view('guides', compact('guide'));
    }


    public function guideUpload()
    {

        return view('/guides/guideUpload');
    }

    public function store(Request $request)
    {
        $guide = guide::create(

            request(['title', 'body', 'keywords', 'link'])
        );

        $guide->save();
//
//        flash('Your message has been sent!')->success();

        return redirect()->route('/guides/index');
    }
}
