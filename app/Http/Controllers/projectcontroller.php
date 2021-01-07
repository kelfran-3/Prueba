<?php


namespace App\Http\Controllers;

use App\projects;

use Illuminate\Http\Request;

use App\Http\Requests\CreateProjectRequest;

class Projectcontroller extends Controller
{

    public function index()
    {
        
//$portfolio =[
  //  ['title'=>'proyecto 1'],
    //['title'=>'proyecto 2'],
    //['title'=>'proyecto 3'],
 //]; 

   
   return view('projects.index', [
          

          'projects'=> projects::get() //projects perteneciente al modelo projects.php

   ]);
    }


    public function show($id)
    {
        

        
         

         return view('projects.show',[


               'project'=> projects::findOrFail($id)      ]);

   }


    public function create( )
    {
        

    return view ('projects.create',[

        'project'=> new projects

    ]);    
         


   }


 public function store(CreateProjectRequest  $request)
    {
        

    // return request('title'); //para mostrar un dato en particular
      
   
   

   projects::create($request->validated()); // campos que van a ser validados al momento de crear 



   return redirect()->route('projects.index')->with('The project was created successfully');
}



  public function edit(projects $project){

        return view('projects.edit', [

               'project' => $project

        ]);

}



 public function update(projects $project, CreateProjectRequest $request)
 {

        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'The project was updated successfully');

}



public function destroy(projects $project){

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'The project was deleted successfully');

}

}
