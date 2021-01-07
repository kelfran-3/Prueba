
@extends('layout')

@section('title', 'Choferes')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('Drivers')

    </h1>




	<a class="btn btn-small btn-primary" 

	  href="{{ route('choferes.create')}}">

     @lang('Include New Driver')</a>

</div>

    <p class="lead text-secondary"> Personal de choferes del transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($choferes as $chofere)

		<li class="list-group-item border-0 mb-3 shadow-sm">

<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{ route('choferes.edit', $chofere) }}" >
              
              <span class=" font-weight-bold">
				{{$chofere->id}}. {{$chofere->names}} {{$chofere->apellido}}
                
                </span>
                 

                  <span class="text-black-50">
                
                 {{$chofere->cedula}}
			    
			      </span>

			        </a>


	    </li> 
     @empty

     <li class="list-group-item border-0 mb.3 shadow-sm"> 

     No hay ningun elemento
 </li>


	@endforelse


       </ul>
       </ul>

       </div>
       @endsection