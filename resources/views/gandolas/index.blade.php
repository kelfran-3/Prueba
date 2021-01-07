
@extends('layout')

@section('title', 'Gandolas')

@section('subtitle')




<div class="container">

<div class="d-flex justify-content-between aling-items-center mb-3">
	<h1   class="display-4 mb-0">

	@lang('Gandolas')

    </h1>




	<a class="btn btn-primary" 

	  href="{{route('gandolas.create')}}">

     @lang('Include New Driver')</a>

</div>

    <p class="lead text-secondary"> Gandolas pertenecientes al transporte</p>


        <ul class="list-group">
          <li class=" border-0 mb-0 ">
            <div  class="d-flex text-secondary justify-content-between aling-items-center" >
           
              <h3>
                 <span class="text-black-50">Marca</span>
              </h3>
            
               <h4>
                   <span class="text-black-50"> 


                Chuto   / Bat


                   </span>
               </h4>

            </div>
          </li>
        </ul>


<ul class="list-group">



     <ul class="list-group">
	     @forelse($gandolas as $gandola)

		<li class="list-group-item border-0 mb-3 shadow-sm">

<a  class="d-flex text-secondary justify-content-between aling-items-center" 

			href="{{ route('gandolas.edit', $gandola) }}" >
              
              <span class=" font-weight-bold">
				{{$gandola->id}}. {{$gandola->marca}}
                
                </span>
                 
                  <span class="text-black-50">
                
                 {{$gandola->placa}} / {{$gandola->bat}}
			    
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