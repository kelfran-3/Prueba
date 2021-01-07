@extends('layout')

@section('title', ' Estados|'.$estados->names)


@section('subtitle')


 
@section('subtitle')


<diV class="container">
 <div class="bg-white p-5 shadow  rounded">
 <h1>{{$estados->names}}</h1>


<p>  {{$estados->id}}</p>

<div class="d-flex justify-content-between aling-items-center">

 <a href="{{ route('estados.index')}}"> @lang('Return')</a>



 <div class="btn btn-group btn-gruop-sm">


 <a class="btn btn-primary" 

 href="{{route('estados.edit', $estados)}}"> Editar</a>


<form method="Post" action="{{route('estados.destroy' , $estados)}}">
	
	@csrf @method('DELETE')

	<button>@lang('Delete')</button>
</form>
</div>

</div>

   </div>
 </diV>  

@endsection