<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auctions1;
use DB;
class AuctionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
//        $auctions = auctions1::all()->sortBy('End', 1);
        $auctions = auctions1::all()->sortBy('LENGTH(END)');
        return view('/auctions/auctions', compact('auctions'));
    }

    public function updateAuctions() {
        DB::table('auctions1')->truncate();

        shell_exec("c:\Users\Chris\PycharmProjects\PythonVenv\Scripts\python c:\wamp\www\chawker21.blue\public/auction_resources/python/auction2.py
");
//        shell_exec("c:\Users\Chris\PycharmProjects\PythonVenv\Scripts\python c:\wamp\www\chawker21.blue\public/insertauctionsintosql.py
//
//");
//        shell_exec("c:\Users\Chris\PycharmProjects\PythonVenv\Scripts\python c:\wamp\www\chawker21.blue\public/auction_resources/python/auction3.py
//");
        shell_exec("c:\Users\Chris\PycharmProjects\PythonVenv\Scripts\python c:\wamp\www\chawker21.blue\public/insertauctions2intosql.py
");

        return redirect()->action('AuctionController@index');
    }
}
