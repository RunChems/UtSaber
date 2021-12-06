@extends('layouts.app')

@section('content')




<div class="container">

    <div class="row">
        <div class="col-12 text-center">
            <h2>Demografía</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda autem dolor dolore eligendi
                excepturi ipsam laudantium maiores necessitatibus odio perspiciatis possimus quas, quasi quis, quod
                rem repellendus repudiandae unde voluptatem!
            </article>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row justify-content-center"">
        <div class="col-6 text-center">
            <label for="gender" class="text-center fs-3">Genero</label>
            <select class="form-control" name="gender" id="gender">
                <option id="1" value="H">Hombre</option>
                <option  id="2" value="M">Mujer</option>
            </select>
        </div>
        <div class="col-6 text-center">
            <label for="place" class="text-center fs-3">Municipio</label>
            <select class="form-control" name="place" id="place">
                <option id="3" value="R">San Martin Texmelucan</option>
                <option id="4" value="C">Huejotzingo</option>
            </select>
        </div>
        <div class="col-6 text-center">
            <label for="typ" class="text-center fs-3">Filtro</label>
            <select class="form-control" name="typ" id="typ">
                <option id="3" value="id5">Habitantes</option>
                <option id="4" value="id6">Promedio</option>
            </select>
        </div>
        <div class="col-12 text-center mt-5">
            <a class="btn btn-danger w-50 text-center" id="filter">Filtrar</a>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="graph">
              <canvas id="Mychart"> 

        
        
            </canvas>
                
             </div>
            </div>
        </div>
    </div>





@php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.inegi.org.mx/app/api/indicadores/desarrolladores/jsonxml/INDICATOR/1002000002/es/070000210132/false/BISE/2.0/24c60ae1-bde2-48a9-1659-2605f5f40662?type=json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "any");
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res, true);
@endphp    


<script>
    let formatData = '<?php echo json_encode($res)?>' 
</script>

<script src="{{ asset('js/filter.js')}}"></script>



    @endsection()