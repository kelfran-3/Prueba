@csrf


<div class="form-group">

    <label for="title">@lang('Load')  </label>



    <input class="form-control border-0 bg-light shadow-sm" 

     type="text" 

     name="carga" 
     value="{{ old ('carga', $status->carga)}}" 

     >
    


</div>


<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block" href="{{ route('status.index')}}"> @lang('Cancel')</a>

