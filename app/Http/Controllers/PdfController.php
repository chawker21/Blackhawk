<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User;
use Auth;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $data = Auth::user();
        return view('pdf.invoice', compact('data'));
    }

    public function export() {
        $data = Auth::user();

        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf->stream('invoice.pdf');

    }
}

