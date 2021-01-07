
@extends('layout')

@section('title' )

@lang('States')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">



@include('partials.validated_errors')


	
<form method="Post" action="{{route('estados.store')}}"  class="bg-white py-3 px-4 shadow rounded mx-auto">

    
	<h1 class="display-4">@lang('Include New State')</h1>
	


@include('estados._form',['btn'=>'Guardar'])
	
</form>




</div>

</div>
</div>
    


@endsection