<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\character_data;
use App\EQModels\character_skills;
use App\EQModels\character_skills_id_name;
use App\EQModels\zone;
use App\EQModels\class_list;
use DB;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = character_data::orderBy('id', 'ASC')->get();
        $classes = class_list::orderBy('id', 'DESC')->get();

        $zone = zone::where('zoneidnumber', '=', $characters[0]['zone_id'])->first();
        return view('/EQemu/character/character_index', compact('characters', 'zone', 'classbin', 'class_name'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {

        $character_data = character_data::where('id', '=', $id)->first();
        $character_skills = character_skills::where('id', '=', $id)->get();
        $character_skill = character_skills::all();
        $character_skill_name = character_skills_id_name::all();
        $name = $character_skill[0]['skill_id'];
        $class_name = class_list::Where('id', '=', $character_data['class'])->first();
        $zone = zone::where('zoneidnumber', '=', $character_data->zone_id)->first();
//


//        $skill_name = character_skills_id_name::where('skill_id', '=', $character_skills->skill_id)->get();
////        dd($skill_name);
        return view('/EQemu/character/character_show', compact('character_data', 'zone', 'character_skills', 'skill_name', 'class_name'));
    }

    public function edit($id)
    {
//        $character_data = character_data::find($id);
//
//        $character_data->name = $request->name;
//        $character_data->zone_id = $request->zone_id;
//
//        $character_data->update();
//
//        return redirect::back();
    }

    public function update(Request $request, $id)
    {
        $character_data = character_data::find($id);
        $input = $request->all();
        $safexyz = zone::where('zoneidnumber', '=', $request->zone_id)->first();
        $character_data->x = $safexyz->safe_x;
        $character_data->y = $safexyz->safe_y;
        $character_data->z = $safexyz->safe_z;
        $character_data->fill($input)->save();
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
