<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flag;
use App\Models\state;

class FlagController extends Controller
{
    public function index() {

        return view('/flags/index');

    }
    public function mapcountry() {

        return view('/flags/map/country');

    }
    public function mapstate() {

        return view('/flags/map/state');

    }
    public function nato() {
        $flags = Flag::where('NATO', '=', True)->get();

        return view('/flags/pages/Nato', compact('flags'));

    }


    public function unitednations() {
        $flags = Flag::where('UN', '!=', Null)->get();

        return view('/flags/pages/UnitedNations', compact('flags'));

    }

    public function p5() {
        $flags = Flag::where('P5', '=', True)->get();

        return view('/flags/pages/p5', compact('flags'));

    }
    public function G7() {
        $flags = Flag::where('G7', '=', True)->get();

        return view('/flags/pages/G7', compact('flags'));

    }
    public function OPEC() {
        $flags = Flag::where('OPEC', '=', True)->get();

        return view('/flags/pages/OPEC', compact('flags'));

    }
    public function africanunion() {
        $flags = Flag::where('africanunion', '=', True)->get();

        return view('/flags/pages/africanunion', compact('flags'));

    }

    public function ArabLeague() {
        $flags = Flag::where('ArabLeague', '=', True)->get();

        return view('/flags/pages/ArabLeague', compact('flags'));

    }

    public function ASEAN() {
    $flags = Flag::where('ASEAN', '=', True)->get();

    return view('/flags/pages/ASEAN', compact('flags'));

}
    public function CIS() {
        $flags = Flag::where('CIS', '=', True)->get();

        return view('/flags/pages/CIS', compact('flags'));

    }
    public function ECO() {
    $flags = Flag::where('ECO', '=', True)->get();

    return view('/flags/pages/ECO', compact('flags'));

}
    public function OIC() {
        $flags = Flag::where('OIC', '=', True)->get();

        return view('/flags/pages/OIC', compact('flags'));

    }

    public function world() {

        $flags = Flag::where('title', '=', 'World')->get();
        return view('/flags/pages/World', compact('flags'));

    }
    public function states() {
        $states = state::all();
        $flags = Flag::where('title', '=', 'State')->get();
        return view('/flags/pages/States', compact('flags', 'states'));

    }

}
