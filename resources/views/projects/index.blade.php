@extends('layout')

@section('title')

Portfolio
@endsection

@section('subtitle')


<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	Portfolio

    </h1>




	<a class="btn btn-primary" 

	  href="{{ route('projects.create')}}">

     @lang('Create New Project')</a>


</div>

    <p class="lead text-secondary"> proyectos realizados por el transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($projects as $project)

		<li class="list-group-item border-0 mb-3 shadow-sm">

			<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{ route('projects.show', $project) }}" >
              
              <span class=" font-weight-bold">
				{{$project->title}}
                
                </span>
                 

                  <span class="text-black-50">
                
                 {{$project->created_at->format('d/m/Y')}}
			    
			      </span>

			        </a>

	    </li> 
     @empty

     <li class="list-group-item border-0 mb.3 shadow-sm"> 

     No hay proyectos para mostrar
 </li>


	@endforelse


       </ul>
       </ul>

       </div>
       @endsection