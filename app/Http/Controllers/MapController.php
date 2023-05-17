<?php

namespace App\Http\Controllers;

use App\Models\map_links;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    public function index()
    {
        $maps = map_links::all();

        return view('/maps/index', compact('maps'));
    }

    public function service()
    {


        return view('/maps/servicerequests');
    }

    public function crime()
    {


        return view('/maps/crime');
    }
    public function uscities()
    {


        return view('/maps/uscities');
    }
    public function uscolleges()
    {


        return view('/maps/uscolleges');
    }
}
