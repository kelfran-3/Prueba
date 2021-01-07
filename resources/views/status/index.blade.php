
@extends('layout')

@section('title', 'Status')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('Status')

    </h1>




	<a class="btn btn-primary" 

	  href="{{route('status.create')}}">

     @lang('Include New') Status </a>

</div>

    <p class="lead text-secondary"> Cargas del transporte</p>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($status as $statu)

		<li class="list-group-item border-0 mb-3 shadow-sm">

			<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{route('status.edit',$statu)}}" >
              
              <span class=" font-weight-bold">
				{{$statu->carga}}
                
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