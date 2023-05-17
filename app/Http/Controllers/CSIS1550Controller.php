<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSIS1550Controller extends Controller
{

    public function index() {
        $colonial = colonial::where('CUSTOMER_NUM','=');

        return view('CSIS1550/index');

    }
}
