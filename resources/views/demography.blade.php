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

        </div>

    </div>







    <x-footer/>
@endsection('content')