@extends('layout')

@section('title' )

@lang('Gandolas')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">



@include('partials.validated_errors')


	
<form method="Post" action="{{route('gandolas.store')}}"  class="bg-white py-3 px-4 shadow rounded mx-auto">

    
	<H3 class="display-6">@lang('Include New Gandola')</H3>
	


@include('gandolas._form',['btn'=>'Guardar'])
	
</form>




</div>

</div>
</div>
@endsection
    