<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\url;

class URLController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $urls = url::where('id', '>', 0)->paginate(100);

        return view('/url/url', compact('urls'));
    }
}
