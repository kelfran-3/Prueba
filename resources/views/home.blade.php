@extends('layout')
@section('title')

{{__('Home')}}
@endsection

@section('subtitle')

<div class="container">
	<div class="row">

            

		<div class="col-12 col-lg-6">


          <H1 class="display-4 text-primary">{{__('Desarrollo Web')}}</H1>

         <p class="lead tet-secondary"> El concepto de transporte se utiliza para describir al acto y consecuencia de trasladar algo de un lugar a otro. También permite nombrar a aquellos artilugios o vehículos que sirven para tal efecto, llevando individuos o mercaderías desde un determinado sitio hasta otro. Algunos ejemplos donde puede aparecer el término puede ser: “El transporte se demoró más de dos horas respecto a la hora prevista de partida”, “Quisiera irme de vacaciones, pero el precio del transporte está cada vez más caro y no me alcanza el dinero”.

         </p>

         <a class="btn btn-lg btn-block btn-primary" href="{{route('contact')}}"> Contactanos</a>
         <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">@lang('Projects')</a>
		</div>
           
           
           <div class="col-12 col-lg-6">

             <img class="img-fluid mb-4 " src="/img/logo.svg" alt="desarrollo web">
           
           </div>
	</div>
</div>




@endsection

