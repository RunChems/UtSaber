@extends('layouts.app')



@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2>Economy</h2>
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
        <form action="{{route('graph-economy')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6 text-center d-block" id="gender-toggle">
                    <label for="gender" class="text-center fs-3">Giro</label>
                    <select class="form-control" name="giro" id="giro">
                        <option
                            <?=  isset($_SESSION['giro']) ? ($_SESSION['giro'] === 'restaurantes' ? 'selected' : '') : '' ?> id="1"
                            value="restaurantes">Restaurantes
                        </option>
                        <option
                            <?=  isset($_SESSION['giro']) ? ($_SESSION['giro'] === 'escuelas' ? 'selected' : '') : '' ?> id="2"
                            value="escuelas">Escuelas
                        </option>
                    </select>
                </div>


                <div class="col-6 text-center">
                    <label for="place" class="text-center fs-3">Municipio</label>
                    <select class="form-control" name="place" id="place">
                        @foreach($mun as $option)
                            <option
                                <?=isset($_SESSION['m_key']) ? ($_SESSION['m_key'] === $option->code ? 'selected' : '') : '' ?> value="{{$option->latitude.",".$option->longitude}}">
                                {{$option->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 text-center mt-5">
                    <input type="submit" class="btn btn-danger w-50 text-center" id="filter" value="Filtrar">

                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row">

            @if(isset($res))
                @foreach($res as $result)

                    <div class="col-sm-6 col-10 offset-1  col-md-4 ml-auto offset-md-0 mt-3 d-flex justify-center align-items-center">
                        <div class="card w-100">
                            <div class="bg-blue-primary text-white font-weight-bold card-header text-center">{{$result['Nombre']}}</div>
                            <div class="card-body text-center">
                                <article>
                                    <p><strong> Dirección:</strong> {{$result['Colonia'].":". $result['Calle']}}<br></p>
                                    <p><strong> Descripción:</strong> {{$result['Clase_actividad']}}</p>
                                    <p><strong> Telefono:</strong> {{$result['Telefono']}}</p>
                                </article>
                            </div>
                        </div>

                    </div>
                @endforeach

            @endif
        </div>

    </div>

@endsection('content')