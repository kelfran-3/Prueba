@extends('layout')

@section('title', "Portfolio | ". $cedes->title)
@section('subtitle')


<diV class="container">
 <div class="bg-white p-5 shadow  rounded">

 <h1>{{$cedes->names}}</h1>


<p class="text-secondary ">  

	{{$cedes->codigo}}</p>

<div class="d-flex justify-content-between aling-items-center">

 <a href="{{ route('operacions.index')}}"> @lang('Return')</a>

 @auth

 <div class="btn btn-group btn-gruop-sm">


 <a class="btn btn-primary" 

 href="{{route('cedes.edit', $cedes)}}"> Editar</a>

 <a  class="btn btn-danger" href="#" onclick="document.getElementById('delete-cedes').submit()"> Eliminar</a>





 
 </div>


 <form id="delete-cedes"  class="d-none" method="POST" action="{{route('cedes.destroy', $cedes)}}">

	@csrf @method('DELETE')
      
  
	

   </form>
     @endauth

   </div> 
   </div>
 </diV>  

@endsection
