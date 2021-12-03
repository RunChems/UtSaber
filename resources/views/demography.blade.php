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
        <div class="row">
            <div class="col-6 text-center">
                <label for="gender" class="text-center fs-3">Genero</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Hombre</option>
                    <option value="">Mujer</option>
                </select>
            </div>
            <div class="col-6 text-center">
                <label for="gender" class="text-center fs-3">Municipio</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">San Martin Texmelucan</option>
                    <option value="">Huejotzingo</option>
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
                <div class="graph"></div>
            </div>
        </div>
    </div>


    <script type="module" src="{{asset('js/inegi.js')}}"></script>
    <?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://www.inegi.org.mx/app/api/indicadores/desarrolladores/jsonxml/INDICATOR/1002000002,1002000003/es/0700/true/BISE/2.0/ae382ea7-08af-442b-9a69-7a279dc05949?type=json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "any");
    $res = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($res, true);
    echo "<pre>";
    $data = $res['Series'][0]['INDICADOR'];
    //    var_dump($data);
    echo "<script>
        let filterBtn =document.querySelector('#filter');
        let graph =document.querySelector('.graph');
        console.log('Gatitos en fuga');

        filterBtn.addEventListener('click',()=>
           {
               const content = document.createElement('div');
              content.innerHTML = 'Filters: ' + $data;

                graph.appendChild(content)

})
    </script>";
    ?>
    {{--    <script src="{{asset('js/inegi.js')}}" type="module"></script>--}}

    <x-footer/>
@endsection('content')