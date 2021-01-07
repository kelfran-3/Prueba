
@extends('layout')

@section('title', 'carga')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('Load')

    </h1>




	<a class="btn btn-primary" 

	  href="{{route('cargas.create')}}">

     @lang('Include New Load')</a>

</div>

    <p class="lead text-secondary"> Cargas del transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($cargas as $carga)

		<li class="list-group-item border-0 mb-3 shadow-sm">

			<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{route('cargas.edit', $carga)}}" >
              
              <span class=" font-weight-bold">
				{{$carga->carga}}
                
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