  <nav class=" navbar navbar-light navbar-expand-sm bg-dark  ">

            <div class="container">    

               <a id="title" class="navbar-brand" href="{{route('inicio')}}">  

                 {{config('app.name')}}
               </a>

         <button class="navbar-toggler" type="button"
 
             data-toggle="collapse" 
 
             data-target="#navbarSupportedContent" 

             aria-controls="navbarSupportedContent"

             aria-expanded="false" 

             aria-label="{{ __('Toggle navigation') }}">
                    

              <span class="navbar-toggler-icon"></span>
    
         </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">




  <ul class="nav nav-pills">


                 <li class="nav-item">
                     <a id="na" class="nav-link  {{setActive('inicio') }}" 
                        href="{{route('inicio')}}">
                        @lang('Home')</a>
                 </li>


                 <li class="nav-item">

                     <a id="na"class="nav-link {{setActive('About') }}" 
                         href="{{route('About')}}">
                         @lang('About')</a>
                </li>



                 <li class="nav-item dropdown">

                       <a  id="na" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> @lang('Configuracion')</a>
                       <div class="dropdown-menu">
                        <a class="dropdown-item  " href="{{route('cedes.index')}}">@lang('Cedes')</a>
                        <a class="dropdown-item " href="{{route('estados.index')}}">@lang('States')</a>
                        <a class="dropdown-item  " href="{{route('choferes.index')}}">@lang('Drivers')</a>
                        <a class="dropdown-item  " href="{{route('gandolas.index')}}">@lang('Gandolas')</a>
                       
                        </div>
                 </li>




                 <li  class="nav-item">


                         <a id="na" class="nav-link {{setActive('operacions') }}" 
                         href="{{route('operacions.index')}}">
                           @lang('Operaciones')</a>
                 </li>

     
      @auth

                  <li class="nav-item">

                    <a id="na" class="nav-link" 

                       href="#" onclick="event.preventDefault();
                 
                       document.getElementById('logout-form').submit();"> @lang('Close session')

                    </a>  
                 </li>





                  
        @else 
                

                  <li class="nav-item"> 

                     <a id="na"class="nav-link {{setActive('login') }}" 

                      href="{{route('login')}}">  

                     @lang('login')
         
                        </a>        
                 </li>
           
        @endauth
  </ul>
</div>





  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              
  @csrf

  </form>               
