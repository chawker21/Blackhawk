<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\legislator;
use App\Models\candidate;
use App\Models\candidatefiling;
use App\Models\candidateid;
class LegislatorController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        //todo make links to getLegislators route and getFIPS
        return view('/legislator/index');
    }

    public function getLegislators()
    {
        /* legislators-current.csv is found at
        https://theunitedstates.io/congress-legislators/legislators-current.csv
        */
        //todo-get legislators-current.csv from https://theunitedstates.io/congress-legislators/legislators-current.csv automatically and save to public/legislator/legislators-current.csv
        if(($handle = fopen('legislator/legislators-current.csv', 'r')) !==FALSE) {
            DB::table('legislators')->truncate();
            while(($data = fgetcsv($handle, 1000, ',')) !==FALSE) {
                legislator::saveLegislators($data);
            }
            fclose($handle);
        }
        return redirect()->action('LegislatorController@getCandidateID');
    }

    public function getCandidateID()
    {
        //todo do something with candidateid::getAllCandidateIDs, right now it needs two days worth of requests to get all 500 api requests.
        ini_set('max_execution_time', 300);
        $legislators = legislator::all();
        foreach ($legislators as $legislator){
//todo seperate api request functions from public routes and combine legislator data with candidate data, id, filings etc...
            candidateid::getAllCandidateIDs($legislator->first_name.'%20'.substr($legislator->last_name, 0, strrpos($legislator->last_name, ' ')));
        }
        return view('/legislator/Legislators', compact('legislators'));
    }

    public function Legislators()
    {
        $legislators = legislator::all();
        return view('/legislator/Legislators', compact('legislators'));
    }
    public function LegislatorData($candidateID)
    {

        $candidate = candidate::where('candidate_id', '=', $candidateID)->first();
        $candidate_filings = candidatefiling::where('candidate_id', '=', $candidateID)->get();
        return view('/Data_Candidate', compact('candidate', 'candidate_filings'));
    }
}
