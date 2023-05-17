<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use App\Models\candidates_2022;
use App\Models\committees_2022;
use App\Models\state;
class CampaignFinanceController extends Controller
{
    public function index() {
        $states = state::all();
        $candidates = candidates_2022::with('committee')->where('CAND_STATUS', '=', 'C')->orderBy('CAND_OFFICE_ST', 'ASC')->orderBy('CAND_OFFICE_DISTRICT', 'ASC')->get();




        return view('campaignfinance/index', compact( 'states', 'candidates'));
    }
    public function  getStateIndex(Request $request){
dd($request);

        $candidates = candidates_2022::where('CAND_OFFICE_ST', '=', $request->state)->with('committee')->where('CAND_STATUS', '=', 'C')->orderBy('CAND_OFFICE_ST', 'ASC')->orderBy('CAND_OFFICE_DISTRICT', 'ASC')->get();



        return view('campaignfinance/state/stateindex', compact('candidates'));
    }

    public function getCandidate(Request $request){

        $candidate = candidates_2022::where('CAND_ID', '=', $request->CAND_ID)->first();
        return view('campaignfinance/pages/candidate', compact('candidate'));

    }
    public function getCampaignCommittee(Request $request){

        $cc = committees_2022::where('CAND_PCC', '=', $request->CMTE_ID)->first();
        return view('campaignfinance/pages/candidate', compact('cc'));

    }

    public function getCommittees(Request $request){

        $candidate = candidates_2022::where('CAND_ID', '=', $request->candidate)->first();

        $googleClient = new GuzzleClient(['verify' => false]);
        $response = $googleClient->get("https://api.open.fec.gov/v1/candidate/$request->candidate/committees/", [
            'query' => [

                'api_key' => env('FEC_API_Key')
            ]
        ]);

        $body = json_decode($response->getBody());


        $committeeIDs = $body->results;

        return view('campaignfinance.committees', compact('candidate','committeeIDs'));

    }
}
