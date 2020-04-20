<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\main_dishe;
use App\side_dishe;
use App\dessert;
use App\order;
use App\dessert_order;
use App\maindish_order;
use App\sidedish_order;

class FoodOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $mains = main_dishe::all();
        $sides = side_dishe::all();
        $desserts = dessert::all();
        return view('home',compact('mains','sides','desserts'));
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
        // $pr = $request->main;
        // $encodedSku = json_encode($request);
        return $request->all();
        // return $encodedSku;
        // $orderId = uniqid();

        // $Corder = new order;
        // $Corder->OID = $orderId;
        // $Corder->WID = 2;
        // $Corder->TotalPrice = 100;
        // $Corder->save();

        // $arrayTostring = implode(',', $request->input('main'));

        // $Morder = new maindish_order;
        // $Morder->OID =$orderId;
        // $Morder->MID = $request->main;}
        // $Morder->Amount = $encodedSku->amount;
        // $Morder->save();



        // $orderId = order::all();



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
