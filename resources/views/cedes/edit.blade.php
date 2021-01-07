
@extends('layout')

@section('title' )

@lang('Cedes')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">


<div class="bg-white py-3 px-4 shadow rounded mx-auto">
	
<form method="Post" action="{{route('cedes.update', $cedes)}}" >


	 @method('PATCH')


   
<h1 class="display-4">@lang('New') Cede</h1>   
   
   
 @include('cedes._form',['btn'=>'Actualizar'])




   </form>

 <form   method="POST" action="{{route('cedes.destroy', $cedes)}}">

	@csrf @method('DELETE')
      


  
<button class="btn btn btn-outline-danger ">@lang('Delete')</button>



</form>

</div>

</div>

</div>
</div>
    


@endsection