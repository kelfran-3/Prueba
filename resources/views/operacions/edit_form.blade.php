@csrf


<div class="form-group">

    <label for="title">@lang('Nunero de Guia')  </label>



    <input class="form-control border-0 bg-light shadow-sm" 

     
     type="text" 

     name="guia" 
     value="{{ old ('guia', $operacions->guia)}}" 

     >
    


</div>

<div class="form-group">
 
 <label form="url"> @lang('Driver') </label>

    

        
    {{-- <input class="form-control border-0 bg-light shadow-sm"

         type="text" 

     name="chofer"

     value="{{ old ('chofer', $operacions->chofer)}}" 

     >--}}
    <select class = "form-control border-0 bg-light shadow-sm" name="chofer">
        
        <option value="{{old('chofer', $operacions->chofer)}}">  {{old ('chofer',$operacions->chofer)}}</option>
        @foreach($choferes as $row)

            <option value="{{ $row->cedula}}">{{ $row->names}} {{ $row->apellido}} - {{ $row->cedula}}</option>
        @endforeach
        
       
    </select>

</div>

<div class="form-group">
 
 <label form="url"> @lang('Placa') </label>

    

        
    <select class = "form-control border-0 bg-light shadow-sm" name="placa gan">
       <option value="{{old('placa_gan', $operacions->placa_gan)}}">  {{old ('placa_gan',$operacions->placa_gan)}}</option>


        @foreach($choferes as $row)
            <option value="{{ $row->placa}}">{{ $row->names}} {{ $row->apellido}} 
                - 
            {{ $row->placa}}</option>
        @endforeach
        
       
    </select>
</div>


<div class="form-group">
 
 <label form="url"> @lang('Origen') </label>

    

        
    <select class = "form-control border-0 bg-light shadow-sm" name="origen">

    <option value="{{old('origen', $operacions->origen)}}">  {{old ('origen',$operacions->origen)}}</option>


    @foreach($cedes as $row)
    <option value="{{ $row->codigo}}">{{ $row->names}} 
        - 
        {{ $row->codigo}}</option>
        @endforeach
        
       
    </select>
    

</div>

<div class="form-group">
 
 <label form="url"> @lang('Destino') </label>

    

<select class = "form-control border-0 bg-light shadow-sm" name="destino">

       <option value="{{old('destino', $operacions->destino)}}">  {{old ('destino',$operacions->destino)}}</option>

        @foreach($cedes as $row)

    <option value="{{ $row->codigo}}">{{ $row->names}} 
        - 
        {{ $row->codigo}}</option>
        @endforeach
        
       
    </select>
    

</div>
<div class="form-group">

    <label form="url"> @lang('Carga') </label>

     <select  name="carga" class="form-control border-0 bg-light shadow-sm">
          <option > {{old('carga', $operacions->carga)}}</option>
          <option>Materia Prima</option>
          <option>Producto</option>
          <option>Plancha</option>

    </select>
</div>


<div class="form-group">


 <label form="url"> @lang('Fecha de Carga') </label>

   


    <input class="form-control border-0 bg-light shadow-sm"

   <?php 
    if(isset($operacions->created_at)){

        $fecha = $operacions->created_at->format('Y-m-d');
    }else{


        $fecha=date('Y-m-d');
    }

   ?>  
     type="Date" 

     name="created_at"
     placeholder="AAAA-MM-DD" 

     value="{{ old ('operacions', $fecha)}}" >
    

</div>


<div class="form-group">


 <label form="url"> @lang('Fecha de Despacho') </label>

    
     <?php 
    if(isset($operaciones->updated_at)){

        $fecha = $operaciones->updated_at->format('Y-m-d');
    }else{


        $fecha=date('Y-m-d');
    }

   ?>  

        
    <input class="form-control border-0 bg-light shadow-sm"

     
     type="date" 

     name="updated_at"
     placeholder="AAAA-MM-DD"

     value="{{ old ('updated_at', $fecha)}}" 

     >
    

</div>




 
 <label form="url"> Estado del Transporte: </label>
     <br>

<div class="form-group form-check">
     
     <input type="checkbox"  id="inlineCheckbox2" name="status" class="form-check-input "  value= "cerrado" 

        @if(old('status',$operacions->status) == "cerrado")
             checked

        @endif
>
  

     <label class="custom-check-label" for="inlineCheckbox2">cerrado</label>

</div>

<div class="form-group form-check">



     <input type="checkbox"  id="inlineCheckbox1" name="status" class="form-check-input "  value= 'Transito' 
        @if(old('status',$operacions->status) == "Transito")
        checked

        @endif

>
  

    <label class="custom-check-label" for="inlineCheckbox1">Transito</label>

</div>





<hr>

<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

<br>



