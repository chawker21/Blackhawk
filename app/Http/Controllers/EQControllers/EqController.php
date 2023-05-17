<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\npc_type;
use App\EQModels\zone;
use App\EQModels\item;
use App\EQModels\account;
use App\EQModels\character_data;

class EqController extends Controller
{


    public function atlas()
    {
        return view('/atlas');
    }

    public function processNPCname(Request $request)
    {
        $npcname = $request->name;
        $NPC = npc_type::where('name', 'like', '%' . $npcname . '%')->get();
        return view('/EQemu/NPClist', compact('NPC'));
    }

    public function getZone()
    {
        return view('/EQemu/zone');
    }

    public function processZONEname(Request $request)
    {
        $zonename = $request->name;
        $Zone = zone::where('long_name', 'like', '%' . $zonename . '%')->orwhere('short_name', 'like', '%' . $zonename . '%')->get();
        return view('/EQemu/Zonelist', compact('Zone'));
    }

    public function getItem()
    {
        return view('/EQemu/Item');
    }

    public function processITEMname(Request $request)
    {
        $Itemname = $request->name;
        $Item = item::where('name', 'like', '%' . $Itemname . '%')->get();
        return view('/EQemu/Itemlist', compact('Item'));
    }

    public function accounts()
    {
        $accounts = account::all();
        return view('/EQemu/accounts', compact('accounts'));
    }

    public function getAccount(Request $request)
    {

        $account_id = $request->id;
        $account = account::where('id', '=', $account_id)->first();

        return view('/EQemu/getAccount', compact('account'));

    }
    public function processAccount(Request $request, $id)
    {
        $account = account::find($id);
    }


}
