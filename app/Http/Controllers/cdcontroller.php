<?php

namespace App\Http\Controllers;

use App\cede;

use App\Http\Requests\CreateProjectRequest;


class cdcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('cedes.index',[
            

            'cedes'=>cede::get()

        ]);
    }

    public function show(cede $cedes)
    {

      return view('cedes.show',[


               'cedes'=> $cedes]);

    }

     public function create()
    {
        
     
         return view('cedes.create',[

        'cedes'=> new cede

    ]);            

    }


     public function store(CreateProjectRequest $request)
    {
        
    cede::create( $request->validated() );

     return redirect()->route('cedes.index');        

    }


    public function edit(cede $cedes)
    {
         

         return view('cedes.edit',[


               'cedes'=> $cedes
               ]);       

    }
    public function update(cede $cedes, CreateProjectRequest $request)
    {
         



        $cedes->update($request->validated());

        return redirect()->route('cedes.show', $cedes)->with('status', 'The project was update successfully');       

    }


     public function destroy(cede $cedes)
    {
         


        $cedes->delete();

        return redirect()->route('cedes.index')->with('status', 'The project was deleted successfully');       

    }
}
