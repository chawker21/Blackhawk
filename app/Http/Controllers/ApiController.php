<?php

namespace App\Http\Controllers;

use App\Models\Models_Coinbase\coinbase_products;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;

class ApiController extends Controller
{
    public function github($username)
    {
        $client = new GuzzleClient(['verify' => false]);

        $response = $client->get("https://api.github.com/users/$username");


        print "Name: $body->name <br />";
        print "Location: $body->location <br />";
        print "Bio: $body->bio <br />";
        //https://api.github.com/users/chawker21
    }

    public function getWeather()
    {
        return view('weather');

    }
    public function getWeatherJs()
    {
        $product = coinbase_products::orderBy('base_currency')->get();
        return view('weather-js', compact('product'));

    }

    public function postWeather(Request $request)
    {

        $this->validate($request, ['location' => 'required|min:5']);
        $googleClient = new GuzzleClient(['verify' => false]);
        $response = $googleClient->get('https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $request->location,
                'key' => env('GOOGLE_API_KEY')
            ]
        ]);

        $googleBody = json_decode($response->getBody());
        dd($googleBody->results[0]->address_components[1]->long_name);
        $coords = $googleBody->results[0]->geometry->location;

        $owClient = new GuzzleClient();
        $owUrl = 'api.openweathermap.org/data/2.5/weather?lat='.$coords->lat.'&lon='.$coords->lng.'&units=imperial&appid='.env('OPENWEATHER_API_KEY');
        $owResponse = $owClient->get($owUrl);
        $weatherBody = json_decode($owResponse->getBody());

        return view('weather-ready')->with('weather', $weatherBody)->with('address', $googleBody->results[0]);
    }

    public function getCivilWarMaps()
    {
        $LOCClient = new GuzzleClient(['verify' => false]);
        $response = $LOCClient->get( 'https://www.loc.gov/collections/civil-war-maps',
        [
            'query' => [
                'fo' => 'json'
            ]
        ]);
        $LOCBody = json_decode($response->getBody());
        $results = $LOCBody->results;
//dd($results);

        return view('civilwarmaps')->with('maps', $LOCBody)->with('results', $results);

    }

    public function getApod()
    {
        $apodClient = new GuzzleClient(['verify' => false]);
        $response = $apodClient->get( 'https://api.nasa.gov/planetary/apod',
            [
                'query' => [
                    'api_key' => env('NASA_API_KEY')
                ]
            ]);
        $apodBody = json_decode($response->getBody());
        $results = $apodBody;


        return view('nasa/nasa_apod')->with('results', $results);
    }


    //https://maps.googleapis.com/maps/api/geocode/json?address=
    //api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid=f5b5de1c7c9e635727203d95b2b7e193
}
