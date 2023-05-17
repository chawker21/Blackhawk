<?php

namespace App\Http\Controllers\EQControllers;

use Illuminate\Http\Request;
use App\EQModels\item;
use App\EQModels\class_list;
use App\EQModels\slot_list;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::orderBy('id', 'ASC')->paginate(15);
        return view('/EQemu/item.item_index', compact('items'));
    }

    public function select()
    {
        return view('/EQemu/item.item_select');
    }

    public function result(Request $request)
    {
        $query = $request->input('query');
        $items = item::search($request, $query);
        return view('/EQemu/item.item_result', ['items' => $items, 'query' => $query]);
    }
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
        $item = item::where('id', '=', $id)->first();
        $classes = class_list::orderBy('id', 'DESC')->get();
        $slots = slot_list::orderBy('slot_id', 'DESC')->get();
        $slotsbin = str_pad(decbin($item->slots), 32, '0', STR_PAD_LEFT);

        $classbin = sprintf("%016d", decbin($item->classes));
//        foreach($classes as $class)
//            $classbin[$class['class_list_id']]


        return view('/EQemu/item/item_show', compact('item', 'classes', 'classbin', 'slots', 'slotsbin'));
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
