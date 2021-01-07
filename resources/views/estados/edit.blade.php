
@extends('layout')

@section('title' )

@lang('States')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">


<div class="bg-white py-3 px-4 shadow rounded mx-auto">
	
<form method="Post" action="{{route('estados.update', $estados)}}" >


	 @method('PATCH')


   
<h1 class="display-4">@lang('New State')</h1>   
   
   
 @include('estados._form',['btn'=>'Actualizar'])



</form>

 <form id="delete-cedes"   method="POST" action="{{route('estados.destroy', $estados)}}">

	@csrf @method('DELETE')
      
  
	<button  class="btn btn-outline-danger">@lang('Delete')</button>


   </form>



</div>


</div>

</div>
</div>
    


@endsection