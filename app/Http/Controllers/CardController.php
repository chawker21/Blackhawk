<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\civil;
use Input;
use getID3;

class CardController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index() {
        $cards = civil::all();

        return view('/cards/cards', compact('cards'));
    }
    public function Civil_War() {


        return view('/cards/Civil_War');
    }
    public function create()
    {
        return view('/cards/api/newcard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Card = new Card;
        $Card->Title = $request->Title;
        $Card->Subject = $request->Subject;
        $Card->Year = $request->Year;
        $Card->LKF = $request->LKF;
        $Card->Side = $request->Side;
        $Card->Category = $request->Category;
        $Card->Cardid = $request->Cardid;
        $Card->save();

        return redirect()->action('CardController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
