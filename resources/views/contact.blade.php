
@extends('layout')
@section('title')
@lang('Contact')
@endsection


@section('subtitle')


@include('partials.session_status')

<div class='container'>

  
  <div class="row">
     <div class="col-12 col-sm-10  col-lg-6 mx-auto">

       <form class="big-white shadow rounded py-3 px-4 mx-auto" 
        
         action="{{ url('contact')  }}"  method="POST" >

    @csrf

    <h1 class="display-4">@lang('Contact')</h1>
    
  
    <label for="name"> @lang('Name')</label> 
    <div class="form.group">
 	<input class="form-control bg-light shadow-lg @error('name')is-invalid @else  border-0 @enderror "
    id="name"
  
    type="text"

    name="name" placeholder="Name.." 

    value="{{old('Name')}}" >

     

     @error('name')

     <span class="invalid-freedback" role="alert">  

      <strong> {{ $message }} </strong>
      </span>

     @enderror
     </div>


         <label for="email"> @lang('Email') </label>     
      <div class="form.group">
        <input class="form-control bg-light shadow-lg @error('email') is-invalid @else border-0 @enderror"

        id="email"

       type="Email"

        name="email" 

        placeholder="Email.." 

        value="{{old('Email')}}">
        
 
     @error('email')

     <span class="invalid-freedback" role="alert">  

      <strong> {{ $message }} </strong>
      </span>

     @enderror

      </div>

       <label for="subject"> @lang('Subject')</label>

      <div class="form.group">
     
    <input class="form-control bg-light shadow-lg @error('subject') is-invalid @else border-0 @enderror" 

    id="subject"

    type="text" 

    name="subject" 

    placeholder="Subject.." 

    value="{{old('Subject')}}">

    @error('subject')

     <span class="invalid-freedback" role="alert">  

      <strong> {{ $message }} </strong>
      </span>

     @enderror

    </div>

    <label for="contend"> @lang('Message')</label>

    <div class="form.group"> 


    <textarea  class="form-control bg-light shadow-lg @error('contend') is-invalid @else border-0 @enderror"


    id="contend" name="contend" placeholder="Message..."></textarea>


    @error('contend')

     <span class="invalid-freedback" role="alert">  

      <strong> {{ $message }} </strong>
      </span>

     @enderror

    </div>

    <button class="btn btn-primary btn-lg btn-block"> @lang('Send')</button>

        </form>
    </div>
  </div>
</div>

@endsection