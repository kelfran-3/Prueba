
@csrf





<div class="form-group">
	
	<label for="title">@lang('Title of the project')  </label>



    <input class="form-control border-0 bg-light shadow-sm" 

     id="title"
     type="text" 

     name="title"  

     value="{{old('title' ,$project->title)}}">
    


</div>

<div class="form-group">
 
 <label form="url"> @lang('URL of the Project') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="url" 

     value="{{old ('url', $project->url)}}">
    
</div>

	
<div class="form-group">

<label for="description">@lang('Description of the Project') </label>

        
<textarea class="form-control border-0 bg-light shadow-sm"  



 id="description"
 name="description"> {{old ('description',$project->description)}}</textarea>
    

    

</div>


    
<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block" href="{{ route('projects.index')}}"> @lang('Cancel')</a>
