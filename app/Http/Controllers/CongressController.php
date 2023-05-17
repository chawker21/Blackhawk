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
use App\Models\house_activity;
use App\Models\passedlegislation;
class CongressController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    //todo combine this controller into LegislatorController
    public function getPolitician()
    {
        return view('/politician');
    }

    public function processPolitician(Request $request)
    {
        politician::savePoliticianName($request);
        return redirect()->action('CongressController@getDataCenter');
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
        return redirect()->action('CongressController@GSA');
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
        redirect()->action('CongressController@petitions');
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


    public function gethouseactivities()
    {
        exec("C:\wamp\www\chawker21.blue\public\congress_resources\gethouseactivities.exe");
        shell_exec("c:\Progra~1\Python37\python c:\wamp\www\chawker21.blue\public/congress_resources/python/inserthouseactivitiestosql.py");
        return redirect()->action('CongressController@house_activities');
    }
    public function house_activities()
    {
        $activities = house_activity::all();
        return view('/congress/dailyactivities', compact('activities'));
    }
    public function passedlegislation()
    {
        $passedlegislation = passedlegislation::all();
        return view('/congress/passedlegislation', compact('passedlegislation'));
    }
}

