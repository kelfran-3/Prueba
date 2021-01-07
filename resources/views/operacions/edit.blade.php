
@extends('layout')

@section('title' )

@lang('Operations')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">


<div class="bg-white py-3 px-4 shadow rounded mx-auto">
	
<form method="Post" action="{{route('operacions.update', $operacions)}}" >


	 @method('PATCH')


   
<h3 class="display-4">@lang('Update Guie') </h3>   
   
   
 @include('operacions.edit_form',['btn'=>'Actualizar'])




   </form>
   <br>	

 <form   method="POST" action="{{route('operacions.destroy', $operacions)}}">

	@csrf @method('DELETE')
      


  
<button class="btn btn-danger btn-lg btn-block">@lang('Delete')</button>



</form>

 <a class="btn btn-link btn-block" href="{{ route('operacions.index')}}"> @lang('Cancel')</a>
</div>

</div>


</div>
</div>
    


@endsection