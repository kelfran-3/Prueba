@extends('layout')

@section('title', "Portfolio | ". $project->title)
@section('subtitle')


<diV class="container">
 <div class="bg-white p-5 shadow  rounded">

 <h1>{{$project->title}}</h1>


<p class="text-secondary ">  

	{{$project->description}}</p>

<p class="text-black-50">

	<small> @lang('Created') {{  $project->created_at->diffForHumans()}}</small>



   </p>
<div class="d-flex justify-content-between aling-items-center">

 <a href="{{ route('projects.index')}}"> @lang('Return')</a>

 @auth

 <div class="btn btn-group btn-group-sm">


 <a class="btn btn-primary" 

 href="{{route('projects.edit', $project)}}"> Editar</a>




 </div>

 <form   method="POST" action="{{route('projects.destroy', $project)}}">

	@csrf @method('DELETE')
      


  
<button class="btn btn btn-outline-danger ">@lang('Delete')</button>



</form>


     @endauth

   </div> 
   </div>
 </diV>  

@endsection

