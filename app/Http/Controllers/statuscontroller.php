<?php

namespace App\Http\Controllers;
use App\carga;

use App\Http\Requests\CargaRequest;


class statuscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('status.index',[
            

            'status'=>carga::get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('status.create',[

        'status'=> new carga

    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargaRequest $request)
    {
            carga::create( $request->validated() );

     return redirect()->route('status.index');    }

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
    public function edit( carga $status)
    {
        
         return view('status.edit',[


               'status'=> $status
               ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(carga $status, CargaRequest  $request)
    {
        
        $status->update($request->validated());

        return redirect()->route('status.index', $status)->with('status', 'The project was update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(carga $status)
    {
        $status->delete();

        return redirect()->route('status.index')->with('status', 'The project was deleted successfully');
    
    }
}
