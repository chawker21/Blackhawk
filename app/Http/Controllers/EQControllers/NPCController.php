<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\npc_type as npc_type;

class NPCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NPCs = npc_type::where('id', '>=', 1000)->orderBy('id', 'ASC')->paginate(15);
        return view('/EQemu/NPC/NPC_index', compact('NPCs'));
    }

    public function select()
    {
        return view('/EQemu/NPC/NPC_select');
    }

    public function result(Request $request)
    {
        $npcname = $request->name;
        $NPC = npc_type::where('name', 'like', '%' . $npcname . '%')->get();
        return view('/EQemu/NPC/NPC_result', compact('NPC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $NPC = npc_type::where('id', '=', $id)->first();

            return view('/EQemu/NPC/NPC_show', compact('NPC'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
