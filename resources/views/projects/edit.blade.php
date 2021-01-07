 @extends('layout')

@section('title')

Portfolio
@endsection

@section('subtitle')

 <div class="container">

  <div class="row">

    <div class="col-12 col-sm-10  col-lg-6 mx-auto">



<form class="bg-white py-3 px-4 shadow rounded mx-auto" 
 method="POST"  action="{{route('projects.update', $project )}}">

	 @method('PATCH')
            <h1 class="display-4">@lang('Edit Project')</h1>

         <hr>
          @include('projects._form',['btn'=>'Actualizar'])


      </form>

</div>

</div>

</div>


@endsection