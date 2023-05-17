<?php

namespace App\Http\Controllers;

use Models\Illuminate\Http\Request;

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
class GSAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getGSAData()
    {
        gsaauction::getGSA();
        return redirect()->action('GSAController@GSA');
    }
    public function GSA()
    {
        $gsa = gsaauction::all();
        return view('/GSA/GSA', compact('gsa'));
    }
}
