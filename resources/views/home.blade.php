@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pt-3 text-center">
                        <h4> Bienvenido <strong> {{ Auth::user()->name }}</strong>
                        </h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-8 col-12">
                <form action="{{route('articles.update',App\Models\Article::where('title','main')->first()->id)}}"
                      class="w-100" method="POST">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" value="main">
                    <div class="form-group">
                        <label for="info"><h3> Información de la página</h3></label>
                        <textarea type="text" id="info" name="info" class="form-control fs-5 w-100"
                                  rows="10">{{$article->body}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                    </div>
                    <div class="form-group text-center w-100">
                        <label for=""></label>
                        <input class="btn btn-danger text-center w-50" type="submit" value="Actualizar">
                    </div>

                </form>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            Administrar Usuarios
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="" alt="This is an image">
                        <a class="btn btn-danger w-75 text-center" href="{{route("users.index")}}">
                            Ir
                        </a>
                        <p>Total de usuarios: 150</p>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4 class="text-center">
                            Administrar Articulos
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="" alt="This is an image">
                        <a class="btn btn-danger w-75 text-center" href="{{route("articles.index")}}">
                            Ir
                        </a>
                        <p>Total de articulos: 150</p>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="mb-5 pb-5"></div>
@endsection
