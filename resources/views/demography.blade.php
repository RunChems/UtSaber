@if(!empty($mun))

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
        <form action="{{route('graph-demography')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                @if(isset($_SESSION['type']))
                    @if($_SESSION['type'] === 'average')
                        <div class="col-6 text-center d-none" id="gender-toggle">
                            <label for="gender" class="text-center fs-3">Genero</label>
                            <select class="form-control" name="gender" id="gender">
                                <option
                                    <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000002' ? 'selected' : '') : '' ?> id="1"
                                    value="1002000002">Hombre
                                </option>
                                <option
                                    <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000003' ? 'selected' : '') : '' ?> id="2"
                                    value="1002000003">Mujer
                                </option>
                            </select>
                        </div>
                    @else
                        <div class="col-6 text-center d-block" id="gender-toggle">
                            <label for="gender" class="text-center fs-3">Genero</label>
                            <select class="form-control" name="gender" id="gender">
                                <option
                                    <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000002' ? 'selected' : '') : '' ?> id="1"
                                    value="1002000002">Hombre
                                </option>
                                <option
                                    <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000003' ? 'selected' : '') : '' ?> id="2"
                                    value="1002000003">Mujer
                                </option>
                            </select>
                        </div>
                    @endif
                @else
                    <div class="col-6 text-center d-block" id="gender-toggle">
                        <label for="gender" class="text-center fs-3">Genero</label>
                        <select class="form-control" name="gender" id="gender">
                            <option
                                <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000002' ? 'selected' : '') : '' ?> id="1"
                                value="1002000002">Hombre
                            </option>
                            <option
                                <?=  isset($_SESSION['indicator']) ? ($_SESSION['indicator'] === '1002000003' ? 'selected' : '') : '' ?> id="2"
                                value="1002000003">Mujer
                            </option>
                        </select>
                    </div>

                @endif


                <div class="col-6 text-center">


                    <label for="place" class="text-center fs-3">Municipio</label>
                    <select class="form-control" name="place" id="place" value="{{old('type')}}">

                        @foreach($mun  as $option)
                            <option
                                <?=isset($_SESSION['m_key']) ? ($_SESSION['m_key'] === $option->key ? 'selected' : '') : '' ?> value="{{$option->key}}">
                                {{$option->name}}
                            </option>

                        @endforeach
                    </select>

                </div>
                <div class="col-6 text-center">
                    <label for="type" class="text-center  fs-3">Filtro</label>
                    <select class="form-control" name="type" id="type">

                        <option id="3"
                                value="population" <?= isset($_SESSION['type']) ? ($_SESSION['type'] === 'population' ? 'selected' : '') : '' ?>>
                            Habitantes
                        </option>
                        <option id="4"
                                value="average" <?= isset($_SESSION['type']) ? ($_SESSION['type'] === 'average' ? 'selected' : '') : ''  ?>>
                            Grado promedio de escolaridad
                        </option>
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
            <div class="col-12">
                <div class="graph">
                    <canvas id="Mychart">


                    </canvas>

                </div>
            </div>
        </div>
    </div>
    <script>
        let label = '<?php echo $_SESSION['label'] ?? ''?>';
        let formatData = ' <?php echo json_encode($data ?? '')?>'
    </script>

    <script src="{{ asset('js/filter.js')}}"></script>
    <script src="{{ asset('js/switchSelect.js')}}"></script>



@endsection()

@else
    <script>window.location = "/";</script>
@endif