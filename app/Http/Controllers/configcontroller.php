<?php

namespace App\Http\Controllers;

use App\estado;

use App\Http\Requests\CreateProjectRequest;

class configcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('estados.index', [
          

          'estados'=> estado::get() //projects perteneciente al modelo projects.php

   ]);
    }

    public function show(estado $estados)
    {
        
     
          return view('estados.show',[


               'estados'=> $estados]);        

    }


    public function create()
    {
        
     
         return view('estados.create',[

        'estados'=> new estado

    ]);            

    }

    public function store(CreateProjectRequest $request)
    {
        
    estado::create( $request->validated() );

     return redirect()->route('estados.index');        

    }

    public function edit(estado $estados)
    {
         

         return view('estados.edit',[


               'estados'=> $estados
               ]);       

    }

    public function update(estado $estados, CreateProjectRequest $request)
    {
         



        $estados->update($request->validated());

        return redirect()->route('estados.show', $estados)->with('status', 'The project was update successfully');       

    }
     
    
    public function destroy(estado $estados)
    {
         


        $estados->delete();

        return redirect()->route('estados.index');       

    }


    }

 