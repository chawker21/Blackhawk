<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\Zone;
use App\EQModels\zone_points;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = zone::where('zoneidnumber', '>=', 0)->orderBy('zoneidnumber', 'ASC')->paginate(5);
        return view('/EQemu/zone/zone_index', compact('zones'));
    }

    public function select()
    {
        return view('/EQemu/zone/zone_select');
    }

    public function result(Request $request)
    {
        $zonename = $request->name;
        $zones = zone::where('long_name', 'like', '%' . $zonename . '%')->orderBy('zoneidnumber', 'ASC')->orWhere('zoneidnumber', '=', $zonename)->get();
        return view('/EQemu/zone/zone_result', compact('zones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($zoneidnumber)
    {
        {
            $zone = zone::where('zoneidnumber', '=', $zoneidnumber)->first();

            $zoneins = zone_points::where('zone', '=', $zone->short_name)->get();

            return view('/EQemu/zone/zone_show', compact('zone', 'zoneins', 'nextzone'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
