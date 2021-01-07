@extends('layout')

@section('title', "Choferes | ". $choferes->names)
@section('subtitle')


<diV class="container">
 <div class="bg-white p-5 shadow  rounded">

 <h1>{{$choferes->names}}</h1>


<p class="text-secondary ">  

	{{$choferes->apellido}}</p>

	<label> Cedula: <p class="text-secondary">
		{{$choferes->cedula}}
  
	</p>

	</label>
	<br>

	
<LABEL > @lang('Phone'):
    <p class="text-secondary"> 

    	{{$choferes->tlf}}

    </p>

</LABEL>
<br>
<label> @lang('Date'):

<p class="text-secondary ">  

	{{$choferes->created_at}}</p>

</label>
<div class="d-flex justify-content-between aling-items-center">

 <a href="{{ route('operacions.index')}}"> @lang('Return')</a>

 @auth

 <div class="btn btn-group btn-gruop-sm">


 <a class="btn btn-primary" 

 href="{{route('choferes.edit',$choferes)}}"> Editar</a>

 <a  class="btn btn-danger" href="#" onclick="document.getElementById('delete-cedes').submit()"> Eliminar</a>





 
 </div>


 <form id="delete-cedes"  class="d-none" method="POST" action="{{route('choferes.destroy',     $choferes)}}">

	@csrf @method('DELETE')
      

	

   </form>
     @endauth

   </div> 
   </div>
 </diV>  

@endsection
