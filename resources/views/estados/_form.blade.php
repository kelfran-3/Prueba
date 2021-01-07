@csrf


<div class="form-group">

    <label for="title">@lang('Code')  </label>



     <input class="form-control border-0 bg-light shadow-sm" 

     id="title"
     type="text" 

     name="codigo" 
     value="{{ old ('id', $estados->id)}}" 

     >
   


</div>

<div class="form-group">
 
 <label form="url"> @lang('State') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="names"

     value="{{ old ('names', $estados->names)}}" 

     >
    

</div>


<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block" href="{{ route('estados.index')}}"> @lang('Cancel')</a>


