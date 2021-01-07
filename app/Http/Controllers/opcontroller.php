<?php

namespace App\Http\Controllers;

use App\operacion;

use App\chofere;

use App\gandola;

use App\cede;

use App\Http\Requests\CreateProjectRequest;

use App\Http\Requests\GandRequest;

use App\Http\Requests\ChoRequest;

use App\Http\Requests\OperacionRequest;

class opcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('operacions.index',[
         

          'operacions'=> operacion::get() , 'choferes'=> chofere::paginate(1)

        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('operacions.create',[

        'operacions'=> new operacion, 'choferes'=> chofere::get(),
        'gandolas'=> gandola::get(), 'cedes'=>cede::get()


    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperacionRequest $request)
    {
        
    operacion::create( $request->validated() );

     return redirect()->route('operacions.index');
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
    public function edit(operacion $operacions)
    {
                 return view('operacions.edit',[


               'operacions'=> $operacions, 
               'choferes'=> chofere::get(),
               'gandolas'=> gandola::get(), 
               'cedes'=>cede::get()

               ]);      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(operacion $operacions,OperacionRequest $request)
    {
        $operacions->update($request->validated());

        return redirect()->route('operacions.index', $operacions)->with('status', 'The project was update successfully');       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(operacion $operacions)
    {
         $operacions->delete();

        return redirect()->route('operacions.index')->with('status', 'The project was deleted successfully');;
    }
}
