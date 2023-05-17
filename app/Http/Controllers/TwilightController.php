<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\twilight;
use App\Models\video;
class TwilightController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sync() {
        twilight::TwilightFiles();
        return redirect()->route('/Twilight_Zone/index');
    }
    public function index(){
        $dir = video::distinct()->get(['directory']);
        $episodes = video::where('id', '<', 0)->get();

        return view('/Twilight_Zone/index', compact('dir', 'episodes'));
    }
    public function getDirectory(Request $request) {
        $dir = video::where('id', '<', 0)->get();
        $episodes = video::where('directory', 'LIKE', '%'.$request->directory.'%')->orderBy('id', 'asc')->paginate(1);

        return view('/Twilight_Zone/page', compact('episodes'))->with('dir', $dir);
    }
}
