
@extends('layout')

@section('title', 'operacions')

@section('subtitle') 



<div class="container">


     <div class="d-flex justify-content-between aling-items-center mb-3">


         <h1   class="display-4 mb-0">@lang('Operations')</h1>



<form  >

    
<input  placeholder="search" aria-label="search" autocomplete="off">

  <button  type="submit"> Buscar
    
  </button>


  


</form>


     </div>






<div class="d-flex justify-content-between aling-items-center mb-3">

     <p class="lead text-secondary"> Operaciones del transporte</p>

    <div >


       <a class="btn btn-primary" href="{{route('operacions.create')}}">

            @lang('Include New Guie')
       </a>
 

      



     </div>

</div>
 <ul class="list-group">

<div class="panel-body">

  <table class="  table-bordered" border="1"  bordercolor="gray" cellspacing="0" style="resize:both;">
    <thead>
  <tr class="even">
<th>id</th>
<th>guia</th>
<th>Chofer</th>
<th>Placa</th>
<th>Origen</th>
<th>Destino</th>
<th>Cargas</th>
<th>Status</th>
<th>Fech_carga</th>
<th>Fech_Despacho</th>

</tr>

<tr class="odd" background="green">

	 @forelse($operacions as $operacion)


		  
      <th>{{$operacion->id}}</th></a>

      <td><a href="{{route('operacions.edit', $operacion)}}" >
{{$operacion->guia}} </a></td>


      <td>{{$operacion->chofer}}</td>
      <td>{{$operacion->placa_gan}}</td>
      <td>{{$operacion->origen}}</td>
      <td>{{$operacion->destino}}</td>
      <td>{{$operacion->carga}}</td>
      <td>{{$operacion->status}}</td>
      <td>{{$operacion->created_at}}</td>
      <td>{{$operacion->updated_at}}</td>


</tr>

           </thead>
             @empty

       <li class="list-group-item border-0 mb.3 shadow-sm"> 
             
             No hay ningun elemento
       
       </li>


	     @endforelse

</table>

{{ $operacions->links()}}
</div>

 </ul>


 </div>



      


   </form>







 @endsection 

<script type="text/javascript" >
  



</script>

 


