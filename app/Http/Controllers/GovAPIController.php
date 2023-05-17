<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\candidate;
use App\Models\candidateid;
use Redirect;
use App\Models\politician;
use App\Models\candidatefiling;
use App\Models\gsaauction;
use App\Models\petition;
use Carbon\Carbon;
use App\Models\congress_pdf;
class GovAPIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPolitician()
    {
        return view('/politician');
    }

    public function processPolitician(Request $request)
    {
        politician::savePoliticianName($request);
        return redirect()->action('GovAPIController@getDataCenter');
    }

    public function getData(Request $request)
    {
        $candidateID = $request->candidateID;
       $candidate = candidate::where('candidate_id', '=', $candidateID)->first();
       $candidate_filings = candidatefiling::where('candidate_id', '=', $candidateID)->get();
        return view('/Data_Candidate', compact('candidate', 'candidate_filings'));
    }


    public function getDataCenter()
    {
        $candidates = candidateid::all();
        return view('/DataCenter', compact('candidates'));
    }

    public function getGSAData()
    {
        gsaauction::getGSA();
        return redirect()->action('GovAPIController@GSA');
    }
    public function GSA()
    {
        $gsa = gsaauction::all();
        return view('/GSA', compact('gsa'));
    }
    public function getPetitions()
    {
        petition::getPetition();
        return
        redirect()->action('GovAPIController@petitions');
    }

    public function petitions()
    {
        $petitions = petition::all()->sortByDesc('created');

        return view('/petitions', compact('petitions'));
    }

    public function getCongressPDF()
    {
//        congress_pdf::savepdf();
        $pdf = congress_pdf::all();
        return view('/congress', compact('pdf'));

    }

}

