<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeoIp2\Database\Reader;


class MaxMindController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   public function getIP(Request $request) {
       $user_ip = getenv('REMOTE_ADDR');
//       $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

       $reader = new Reader('../database/maxmind/GeoLite2-City.mmdb');
       $record = $reader->city('24.10.137.21');

        print($user_ip);
        print($request->ip());
       print($record->country->isoCode . "\n"); // 'US'
       print($record->country->name . "\n"); // 'United States'


       print($record->mostSpecificSubdivision->name . "\n"); // 'Minnesota'
       print($record->mostSpecificSubdivision->isoCode . "\n"); // 'MN'

       print($record->city->name . "\n"); // 'Minneapolis'

       print($record->postal->code . "\n"); // '55455'

       print($record->location->latitude . "\n"); // 44.9733
       print($record->location->longitude . "\n");


   }


}
