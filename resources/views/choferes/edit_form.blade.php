@csrf


<div class="form-group">

    <label for="title">@lang('Name')  </label>



    <input class="form-control border-0 bg-light shadow-sm" 


     type="text" 

     name="names" 
     value="{{ old ('names', $choferes->names)}}" 

     >
    


</div>

<div class="form-group">
 
 <label form="url"> @lang('Apellido') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="apellido"

     value="{{ old ('apellido', $choferes->apellido)}}" 

     >
    

</div>

<div class="form-group">
 
 <label form="url"> @lang('Cedula') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="cedula"

     value="{{ old ('cedula', $choferes->cedula)}}" 

     >
    

</div>

<div class="form-group">
 
 <label form="url"> @lang('Phone') </label>

    

        
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="text" 

     name="tlf"

     value="{{ old ('tlf', $choferes->tlf)}}" 

     >
    

</div>

<div class="form-group">
    <label> @lang('Placa/chuto')</label>

    <select class="form-control border-0 bg-light shadow-sm" name="chuto" >

         <option value="{{ old ('chuto', $choferes->chuto)}}">  {{old ('chuto',$choferes->chuto)}}  </option>
                @foreach($gandolas as $row)

        <option value="{{$row->bat}}"> {{$row->id}}. {{$row->modelo}}-{{$row->bat}} </option>


@endforeach
    </select>
</div>

<div class="form-group">
    <label> @lang('Placa')</label>

    <select class="form-control border-0 bg-light shadow-sm" name="placa" >
                 

         <option value="{{ old ('placa', $choferes->placa)}}"> {{old ('placa',$choferes->placa)}}   </option>
         @foreach($gandolas as $row)

                <option value="{{$row->placa}}"> {{$row->id}}. {{$row->modelo}}-{{$row->placa}} </option>
             
             @endforeach


    </select>
</div>




<div class="form-group">
 
 <label form="url"> @lang('Fecha de ingreso') </label>

    

    <?php 

    if (isset($choferes->created_at)){
         $fecha = $choferes->created_at->format('Y-m-d');
     }else{
        $fecha=date('Y-m-d');
    }
    ?>   
    <input class="form-control border-0 bg-light shadow-sm"

     id="url"
     type="date" 

     name="created_at"

     value="{{ old ('choferes', $fecha)}}" 

required 
     >
    

</div>



<button class="btn btn-primary btn-lg btn-block">{{$btn}}</button>

 <a class="btn btn-link btn-block btn-sm" href="{{ route('choferes.index')}}"> @lang('Cancel')</a>




