<!DOCTYPE html>
<html>
<head>
 <title>@yield('title', 'Gestión y Control de Transporte')</title>


 <meta name="viewport" content="width=device-width, initial-scale=1">    

 <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ mix('css/app.css')}}">
<script type="text/javascript" src="{{ mix('js/app.js')}}" defer></script>
 <style type="text/css"> body{
background-color:#EAEAEA;

 }
 #na{

  color:white;

 }

 #title{

color:white;

 }

th{
background:#0B488E;
color:white;

}

  td{

  background: white;

    }     
    

table {
   width: 100%;
   text-align: left;
   border-collapse: collapse;
   margin: 0 0 1em 0;
   caption-side: top;
}
 td, th {
  
  padding: 0.3em;
   border-bottom: 1px solid #999;


  
}
tbody {
   border-bottom: 1px solid #000;
}
tbody th, tfoot th {
   border: 0;
}

tfoot {
   text-align: center;
   color: #555;
   font-size: 0.8em;
}




</style>






 </head>

<body >
	
     <div id="app" class="d-flex flex-column h-screen 
     justify-content-between">

    <header>

	   @include('partials.nav')

    @include('partials.session_status')

    </header>  

     
     <main class="py-4">
       
      @yield('subtitle') 	

     </main>	

    



     <footer class="bg-white  text-center text-black-50 py-3 shadow"> 

     {{ config('app.name')}} | Copyright @ {{date('Y')}}

     </footer>
	
	
	</div>

</body>
</html>
