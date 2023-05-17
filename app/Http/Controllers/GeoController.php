<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeoIp2\Database\Reader;
use Auth;
use App\Models\Geo;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Validator;
class GeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIP(Request $request)
    {

      $user = Auth::user();
        $Geo = new Geo();
        //$Geo->ip = $request->ip();
        $Geo->ip = '73.20.64.153';
            $reader = new Reader('../database/maxmind/GeoLite2-City.mmdb');
            $record = $reader->city('73.20.64.153');
            $Geo->user_id = $user->id;
            $Geo->countryabbr = $record->country->isoCode;
            $Geo->country = $record->country->name;
            $Geo->state = $record->mostSpecificSubdivision->name;
            $Geo->stateabbr = $record->mostSpecificSubdivision->isoCode;
            $Geo->city = $record->city->name;
            $Geo->zip = $record->postal->code;
            $Geo->lat = $record->location->latitude;
            $Geo->lon = $record->location->longitude;
            $Geo->save();
        $ipexists = Geo::where('ip', '=', $request->ip())->first();
        if ($ipexists === null){
            $Geo->save();

        }
            Mapper::map($Geo->lat, $Geo->lon, ['zoom' => 15, 'center' => true, 'mapTypeID' => 'terrain']);
            return view('/IP/GetMyIP', compact('Geo', ));



//       $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));



    }
}
