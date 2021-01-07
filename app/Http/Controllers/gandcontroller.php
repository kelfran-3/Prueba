<?php

namespace App\Http\Controllers;

use App\gandola;

use App\Http\Requests\GandRequest;

class gandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gandolas.index',[
         

                   'gandolas'=> gandola::get() //projects perteneciente al modelo projects.php

        
        ]);
    }

    public function show(gandola $gandolas)
    {
        
     
          return view('gandolas.show',[


               'gandolas'=> $gandolas]);        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gandolas.create',[

         'gandolas'=> new gandola

        ]);
    }

    public function store(GandRequest $request)
    {
    gandola::create( $request->validated() );

     return redirect()->route('gandolas.index'); 
    }

    public function edit(gandola $gandolas)
    {
                 return view('gandolas.edit',[


               'gandolas'=> $gandolas
               ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(gandola $gandolas, GandRequest $request)
    {
        
        $gandolas->update($request->validated());

        return redirect()->route('gandolas.show', $gandolas)->with('status', 'The project was update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gandola $gandolas)
    {
        

        $gandolas->delete();

        return redirect()->route('gandolas.index');

            }
}
