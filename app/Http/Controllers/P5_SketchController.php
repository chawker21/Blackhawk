<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class P5_SketchController extends Controller
{

    public function index() {
        return view('/P5_Sketches/index');
    }
    public function p5js() {

        return view('/P5_Sketches/pages/p5js');
    }
    public function timedistortion() {

        return view('/P5_Sketches/pages/timedistortion');
    }
    public function clock() {

        return view('/P5_Sketches/pages/clock');
    }
    public function cubewave()
    {
        return view('/P5_Sketches/pages/cubewave');
    }

    public function TwitterAPI() {
        return view('pages.Twitter');
    }
    public function location() {
        return view('pages.location');
    }
    public function pixelarray() {
        return view('pages.pixelarray');
    }

    public function arduino() {
        return view('pages.arduino');
    }

    public function sliderRGB() {
        return view('pages.sliderRGB');
    }
    public function matrix() {
        return view('pages.matrix');
    }
    public function rgbscript() {
        return view('pages.rgbscript');
    }
    public function gps() {
        return view('pages.gps');
    }



    public function returnTweets(Request $request)
    {
        $query = $request->input('query');
        $hashtag = json_decode(Twitter::getSearch(['q' => $query, 'count' => 10, 'format' => 'json']), true);

        $hash = $hashtag['statuses'];

        return view('Tweets',  compact('hash'));
        //
    }
}
