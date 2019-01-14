<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryNoteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveryNotes=\App\DeliveryNote::paginate();
        return view('deliveryNotes/index',['deliveryNotes'=>$deliveryNotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=\App\Company::all(); 
        return view('deliveryNotes/create',['companies'=>$companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),
        [
        'delivery_note_date'=>'required'
        ]
    );

    if ($validator->fails()) {
        return redirect()->action('DeliveryNoteController@create')
            ->withErrors($validator);
    }

        $data=$request->input();
        \App\DeliveryNote::create($data);
        return redirect()->action('DeliveryNoteController@index');
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
        \App\DeliveryNote::destroy($id);
        return redirect()->action('DeliveryNoteController@index');
    }
}
