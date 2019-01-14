<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseDeliveryNoteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caseDeliveryNotes=\App\CaseDeliveryNote::with('good')->paginate();
        return view('caseDeliveryNotes/index',['caseDeliveryNotes'=>$caseDeliveryNotes]);
        $caseDeliveryNotes=\App\CaseDeliveryNote::with('deliveryNote')->paginate();
        return view('caseDeliveryNotes/index',['caseDeliveryNotes'=>$caseDeliveryNotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $goods=\App\Good::all();
        return view('caseDeliveryNotes/create',['goods'=>$goods]);   
        //$caseDeliveryNotes=\App\DeliveryNote::all();
        //return view('caseDeliveryNotes/create',['caseDeliveryNotes'=>$caseDeliveryNotes]);
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
        [   'amount'=>'required',
            
        ]);
    
        if ($validator->fails())
        {
            return redirect()->action('CaseDeliveryNoteController@create')
                ->withErrors($validator);
        }

        $data=$request->input();
        \App\CaseDeliveryNote::create($data);
        return redirect()->action('CaseDeliveryNoteController@index');
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
        \App\CaseDeliveryNote::destroy($id);
        return redirect()->action('CaseDeliveryNoteController@index');
    }
}
