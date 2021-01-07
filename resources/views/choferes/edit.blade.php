
@extends('layout')

@section('title' )

@lang('Drivers')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">



<div class="bg-white py-3 px-4 shadow rounded mx-auto">	
<form method="Post" action="{{route('choferes.update', $choferes)}}" >


	 @method('PATCH')


   
<h1 class="display-4">@lang('Edit') @lang('Driver') </h1>   
   
   
 @include('choferes.edit_form',['btn'=>'Actualizar'])





</form>



 <form   method="POST" action="{{route('choferes.destroy',$choferes)}}">

	@csrf @method('DELETE')
      
  
<button class="btn btn btn-outline-danger ">@lang('Delete')</button>


   </form>

</div>
</div>

</div>
</div>
    


@endsection