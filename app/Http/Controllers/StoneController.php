<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stone_links;
use App\Models\stone_tree;
use App\Models\stone_tree_places;
use App\Models\stone_library;
use GuzzleHttp\Client as GuzzleClient;
class StoneController extends Controller
{
    public function index()
    {
        $person = stone_tree::with('birthplace')->get();
        $relatives = stone_tree::all();
        $links = stone_links::all();
        return view('/stone/index', compact('links', 'relatives', 'person'));
    }
    public function getPerson(Request $request)
    {

        $person = stone_tree::where('id', '=', $request->id)->first();


        return view('/stone/pages/person', compact('person', ));
    }



    public function add_tree(){
        $person = stone_tree::all();
        return view('/stone/add_tree', compact('person'));
    }

    public function store(Request $request)
    {
        $newtree = stone_tree::create(

            request(['first_name', 'middle_name', 'last_name', 'born_name', 'surname', 'birth_year', 'death_year', 'father_id', 'mother_id', 'spouse_id', 'child_id', 'sibling_id'])
        );
        $newlocation_birth = stone_tree_places::create(

            request(['state', 'county'])


        );
        $newlocation_death = stone_tree_places::create(

            request(['state', 'county'])


        );

        $this->validate($request, ['birth_location' => 'required|min:5']);
        $googleClient = new GuzzleClient(['verify' => false]);
        $response_birth = $googleClient->get('https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $request->birth_location,
                'key' => env('GOOGLE_API_KEY')
            ]
        ]);

        $googleBody_birth = json_decode($response_birth->getBody());
        $coords = $googleBody_birth->results[0]->geometry->location;
        $newlocation_birth->state = $googleBody_birth->results[0]->address_components[1]->long_name;
        $newlocation_birth->county = $googleBody_birth->results[0]->address_components[0]->long_name;
        $newlocation_birth->lat = $coords->lat;
        $newlocation_birth->lng = $coords->lng;
        $newlocation_birth->save();
        $newtree->birth_id = $newlocation_birth->id;

        $this->validate($request, ['death_location' => 'required|min:5']);
        $googleClient = new GuzzleClient(['verify' => false]);
        $response_death = $googleClient->get('https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $request->death_location,
                'key' => env('GOOGLE_API_KEY')
            ]
        ]);

        $googleBody_death = json_decode($response_death->getBody());
        $coords = $googleBody_death->results[0]->geometry->location;

        $newlocation_death->state = $googleBody_death->results[0]->address_components[1]->long_name;
        $newlocation_death->county = $googleBody_death->results[0]->address_components[0]->long_name;
        $newlocation_death->lat = $coords->lat;
        $newlocation_death->lng = $coords->lng;
        $newlocation_death->save();

        $newtree->death_id = $newlocation_death->id;
        $newtree->save();

//
//        flash('Your message has been sent!')->success();

        return back();
    }

    public function update(Request $request, $id){

        $updatetree = stone_tree::find($id);


    }

    public function person_index(){
        $person = stone_tree::with('birthplace')->with('father')->with('mother')->with('spouse')->orderBy('Birth_Year', 'ASC')->get();

        return view('/stone/person_index', compact('person'));

    }

    public function timeline(){
        $person = stone_tree::with('birthplace')->get();
        $relatives = stone_tree::orderBy('birth_year', 'asc')->get();

        return view('/stone/pages/timeline', compact('relatives', 'person'));
    }

    public function map(){

        return view('/stone/pages/stone_map');
    }

    public function tree(){
        $person = stone_tree::with('birthplace')->get();
        $root = stone_tree::where('id', '=', '6')->get();

        $relatives = stone_tree::all();

        return view('/stone/pages/tree', compact('relatives', 'root', 'person'));
    }
}
