<?php

namespace App\Http\Controllers;

use App\carga;

use App\Http\Requests\CargaRequest;

class cargacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        return view('cargas.index',[
            

            'cargas'=>carga::get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('cargas.create',[

        'cargas'=> new carga

    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargaRequest  $request)
    {
        
    carga::create( $request->validated() );

     return redirect()->route('cargas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(carga $cargas)
    {
        
         return view('cargas.edit',[


               'cargas'=> $cargas
               ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(carga $cargas)
    {
         return view('cargas.edit',[


               'cargas'=> $cargas
               ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(carga $cargas, CargaRequest  $request)
    {
        
        $cargas->update($request->validated());

        return redirect()->route('cargas.index', $cargas)->with('status', 'The project was update successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(carga $cargas)
    {
        
        $cargas->delete();

        return redirect()->route('cargas.index')->with('status', 'The project was deleted successfully');
    }
}
