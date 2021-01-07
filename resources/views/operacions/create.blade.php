@extends('layout')

@section('title' )

@lang('Operations')

@endsection


@section('subtitle')

<div class="container">

  <div class="row">

  	<div class="col-12 col-sm-10  col-lg-6 mx-auto">



@include('partials.validated_errors')


	
<form method="Post" action="{{route('operacions.store')}}"  class="bg-white py-3 px-4 shadow rounded mx-auto">

    
	<H3 class="display-6">@lang('Include New Guie')</H3>
	


@include('operacions._form',['btn'=>'Guardar'])

 <a class="btn btn-link btn-block" href="{{ route('operacions.index')}}"> @lang('Cancel')</a>
	
</form>




</div>

</div>
</div>
@endsection
    