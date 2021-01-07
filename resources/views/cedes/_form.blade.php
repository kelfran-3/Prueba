@csrf



<div class="form-group">

    <label for="title">@lang('Code')  </label>



    <input class="form-control border-0 bg-light shadow-sm" 

    
     type="text" 

     name="codigo" 
     value="{{ old ('codigo', $cedes->codigo)}}" 

     >
    


</div>

<div class="form-group">
 
 <label form="url"> @lang('Center of distribution') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="names"

     value="{{ old ('names', $cedes->names)}}" 

     >
    

</div>
<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block" href="{{ route('cedes.index')}}"> @lang('Cancel')</a>




