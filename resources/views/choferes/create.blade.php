
@extends('layout')

@section('title' )

@lang('Drivers')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">



@include('partials.validated_errors')


	
<form method="Post" action="{{route('choferes.store')}}"  class="bg-white py-3 px-4 shadow rounded mx-auto">

    
	<h3 class="display-5">@lang('Include New Driver')</h3>
	


@include('choferes._form',['btn'=>'Guardar'])
	
</form>




</div>

</div>
</div>
@endsection
    