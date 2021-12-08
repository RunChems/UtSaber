@extends('layouts.app')
@section('content')
    <div class="container-fluid text-center mt-4">
        <h1>UTSaber</h1>
        <h4 class="font-weight-light">El sitio donde encuentras todo sobre demografia y economia</h4>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 fs-5">
                <h2 class="text-center fs-1">¿Qué es UTSaber?</h2>
                <article>
                    @php
                        $text = \App\Models\Article::where('title','main')->first()->body;
                        echo "<p>
                        $text;
                        </p>
                    ";
                    @endphp
                </article>
            </div>
            <div class="col-4 col-md-0">
                <img src="{{env('APP_ENV')=='local'? asset('images/UtSaber.png') : secure_asset('images/UtSaber.png') }}"
                     alt="Imagen">
            </div>

        </div>


    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="offset-xl-1  col-4 col-md-0">
                <img src="{{env('APP_ENV')=='local'? asset('images/inegi.png') : secure_asset('images/inegi.png') }}"
                     class="" alt="Imagen" width="340px">
            </div>

            <div class="offset-md-2 offset-xl-1  col-12 col-md-6 fs-5 pt-4">
                <h2 class="text-center fs-1 ">¿Qué es El Inegi?</h2>
                <article>
                    El Instituto Nacional de Estadística y Geografía es uno de los Órganos constitucionales autónomos de
                    México con gestión, personalidad jurídica y patrimonio propios, responsable de normar y coordinar el
                    Sistema Nacional de Información Estadística y Geografía
                </article>
            </div>

        </div>

    </div>

    <div class="mb-md-2"></div>
    <div class="pb-md-2"></div>
    <x-footer/>
@endsection


