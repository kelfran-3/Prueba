<?php

namespace App\Http\Controllers;

use App\chofere;

use App\gandola;

use App\Http\Requests\GandRequest;

use App\Http\Requests\ChoRequest;

class chocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('choferes.index', [
          

          'choferes'=> chofere::get() ]);   

    }

    public function show(chofere $choferes)
    {

      return view('choferes.show',[


               'choferes'=> $choferes]);

    }

    public function create()
    {
        

        return view('choferes.create',[

         'choferes'=> new chofere, 'gandolas' => gandola::get()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChoRequest $request)
    {
      chofere::create($request->validated() );

      return redirect()->route('choferes.index');  


    }

    public function edit(chofere $choferes, gandola $gandolas)
    {
          return view('choferes.edit',[


               'choferes'=> $choferes,

                'gandolas'=> gandola::get()
               ]);        


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(chofere $choferes, ChoRequest $request)
    {
         $choferes->update($request->validated());

        return redirect()->route('choferes.index', $choferes)->with('status', 'The project was update successfully');       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(chofere $choferes)
    {
        $choferes->delete();

        return redirect()->route('choferes.index')->with('status', 'The project was deleted successfully');;       

    }
}
