<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatacampController extends Controller
{
    public function index() {

        return view('/Datacamp/index');

    }
    public function scrapy() {
        return view('/Datacamp/scrapy');
    }
}
