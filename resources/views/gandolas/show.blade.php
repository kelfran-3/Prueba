@extends('layout')

@section('title', "Gandolas | ". $gandolas->marca)
@section('subtitle')


<diV class="container">
 <div class="bg-white p-5 shadow  rounded">

 <h1>{{$gandolas->marca}}</h1>


<p class="text-secondary ">  

	{{$gandolas->modelo}}</p>

	<label> Placa: <p class="text-secondary">
		{{$gandolas->placa}}
  
	</p>

	</label>
	<br>

	
<LABEL > @lang('description'):
    <p class="text-secondary"> 

    	{{$gandolas->descripcion}}

    </p>

</LABEL>
<br>
<label> @lang('States'):

<p class="text-secondary ">  

	{{$gandolas->estado}}</p>

</label>
<div class="d-flex justify-content-between aling-items-center">

 <a href="{{ route('operacions.index')}}"> @lang('Return')</a>

 @auth

 <div class="btn btn-group btn-gruop-sm">


 <a class="btn btn-primary" 

 href="{{route('gandolas.edit',$gandolas)}}"> Editar</a>

 <a  class="btn btn-danger" href="#" onclick="document.getElementById('delete-cedes').submit()"> Eliminar</a>





 
 </div>


 <form id="delete-cedes"  class="d-none" method="POST" action="#">

	@csrf @method('DELETE')
      

	

   </form>
     @endauth

   </div> 
   </div>
 </diV>  

@endsection
