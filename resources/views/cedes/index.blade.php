
@extends('layout')

@section('title', 'Cedes')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('Cedes')

    </h1>




	<a class="btn btn-primary" 

	  href="{{ route('cedes.create')}}">

     @lang('Include New') CD</a>

</div>

    <p class="lead text-secondary"> Cedes donde trabaja el transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($cedes as $cede)

		<li class="list-group-item border-0 mb-3 shadow-sm">

			<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{ route('cedes.edit', $cede) }}" >
              
              <span class=" font-weight-bold">
				{{$cede->names}}
                
                </span>
                 

                  <span class="text-black-50">
                
                 {{$cede->codigo}}
			    
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