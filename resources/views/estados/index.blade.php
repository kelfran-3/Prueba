
@extends('layout')

@section('title', '| Estados')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('States')

    </h1>




	<a class="btn btn-primary" 

	  href="{{ route('estados.create')}}">

     @lang('Include New State')</a>

</div>

    <p class="lead text-secondary"> estados donde trabaja el transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($estados as $estado)

		<li class="list-group-item border-0 mb-3 shadow-sm">

			<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{ route('estados.edit', $estado) }}" >
              
              <span class=" font-weight-bold">
				{{$estado->names}}
                
                </span>
                 

                  <span class="text-black-50">
                
                 {{$estado->id}}
			    
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