@csrf

<div class="form-group">
 
 <label form="url"> @lang('Marca') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     
     type="text" 

     name="marca"

     value="{{ old ('marca', $gandolas->marca)}}" 

     >
    

</div>
<div class="form-group">
 
 <label form="url"> @lang('Propietario') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="propietario"

     value="{{ old ('propietario', $gandolas->propietario)}}" 

     >
    

</div>


<div class="form-group">
 
 <label form="url"> @lang('Modelo') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     
     type="text" 

     name="modelo"

     value="{{ old ('modelo', $gandolas->modelo)}}" 

     >
    

</div>

<div class="form-group">
 
 <label form="url"> @lang('Placa') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="placa"

     value="{{ old ('placa', $gandolas->placa)}}" 

     >
    

</div>

<div class="form-group">
 
 <label form="url"> @lang('Placa/chuto') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="bat"

     value="{{ old ('bat', $gandolas->bat)}}" 

     >
    

</div>


<div class="form-group">

 <label form="url"> @lang('State') </label>

<select  name="estado" class="form-control border-0 bg-light shadow-sm">
    <option > {{old('estado', $gandolas->estado)}}</option>
    <option>Dañado</option>
    <option>optimo</option>
</select>
</div>


<div class="form-group">
 
 <label form="url"> @lang('Date') </label>

    
<?php 

    if (isset($gandolas->created_at)){
         $fecha = $gandolas->created_at->format('Y-m-d');
     }else{
        $fecha=date('Y-m-d');
    }
    ?>
        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="date" 

     name="created_at"

     value="{{ old ('gandolas', $fecha)}}" 

required 
     >
</div>


<div class="form-group">
 <label form="url"> @lang('Description') </label>

    <textarea class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="descripcion">

    {{ old ('descripcion', $gandolas->descripcion)}} 

     
    

</textarea>

</div>

<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block" href="{{ route('gandolas.index')}}"> @lang('Cancel')</a>




