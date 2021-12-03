@extends('layouts.app')
@section('content')
    <div class="container-fluid text-center mt-4">
        <h1>UTSaber</h1>
        <h4>El sitio donde encuentras todo sobre demografia y economia</h4>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <h2 class="text-center">¿Qué es UTSaber?</h2>
                <article>
                    {{\App\Models\Article::where('title','main')->first()->body}}
                </article>
            </div>
            <div class="col-4 col-md-0">
                <img src="" alt="Imagen">
            </div>

        </div>


    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 col-md-0">
                <img src="" alt="Imagen">
            </div>

            <div class="col-12 col-md-8">
                <h2 class="text-center">¿Qué es El Inegi?</h2>
                <article>
                    El Instituto Nacional de Estadística y Geografía es uno de los Órganos constitucionales autónomos de
                    México con gestión, personalidad jurídica y patrimonio propios, responsable de normar y coordinar el
                    Sistema Nacional de Información Estadística y Geografía
                </article>
            </div>

        </div>

    </div>

    <div class="mb-3"></div>
    <x-footer/>
@endsection


