<?php

namespace App\Http\Controllers;
use App\Models\coinbasetrader;
use App\Models\coinbasecurrencies;
use Illuminate\Http\Request;
use App\Models\coinbase_position;
use App\Models\coinbase_market_websocket;
use App\Models\Models_Coinbase\coinbase_positions;
use App\Models\Models_Coinbase\coinbase_products;
use App\Models\Models_Coinbase\coinbase_trades;
use App\Models\Models_Coinbase\coinbase_stats;
use App\Models\Models_Coinbase\coinbase_product_ticker;
use App\Models\Models_Coinbase\coinbase_index;
class CoinbaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function heartbeat()
    {
        $websocket = coinbase_market_websocket::orderBy('id', 'desc')->first();
        $websocket->toJson();
        return view('/coinbase/heartbeat', compact('websocket'));
    }

    public function index()
    {
        $links = coinbase_index::all();
        return view('/coinbase/index', compact('links'));
    }

    public function positions()
    {
        $positions = coinbase_positions::all();
        return view('/coinbase/pages/positions', compact('positions'));
    }

    public function products()
    {
        $products = coinbase_products::orderBy('base_currency')->get();
        return view('/coinbase/pages/products', compact('products'));
    }
    public function trades(Request $request)
    {
        $arg1 = $request->arg1;

        shell_exec("python H:\wamp\www\Blackhawk\public\app_resources\python\coinbase_product.py $arg1 2>&1" );
        $product = coinbase_products::orderBy('base_currency')->where('quote_currency', '=', 'USD')->get();
        $trades = coinbase_trades::all();
        $stats = coinbase_stats::first()->makeHidden(['time', 'trade_id', 'last', 'volume_30day']);
        $ticker = coinbase_product_ticker::first()->makeHidden(['time', 'trade_id', 'volume']);
        $buys = coinbase_trades::where('side', '=', 'buy')->get();
        $sells = coinbase_trades::where('side', '=', 'sell')->get();



        return view('/coinbase/pages/trades', compact('trades', 'buys', 'sells', 'product', 'arg1', 'stats', 'ticker'));
    }



}
