@extends('layouts.app')

@section('content')
    <x-errors></x-errors>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="card shadow-bottom">
                    <div class="card-header"><h2
                                class="text-center"> {{__("Welcome")}} {{Auth::user()->name}}  </h2>
                    </div>
                    <div class="card-body w-100">
                        <form action="{{route('profile.update',Auth::user()->id)}}" method="post"
                              class="text-center d-flex align-items-center w-100 flex-column justify-content-between">
                            @csrf
                            @method('PUT')
                            <label class="w-100 d-flex justify-content-center align-items-center flex-column">Name
                                <input class="text-center form-control w-75" type="text" name="name"
                                       value="{{Auth::user()->name}}">
                            </label>
                            <label class="w-100 d-flex justify-content-center align-items-center flex-column">Email
                                <input class="text-center form-control w-75" name="email" type="text"
                                       value="{{Auth::user()->email}}">
                            </label>
                            <label class="w-100 d-flex justify-content-center align-items-center flex-column">Password
                                <input class="text-center form-control w-75" name="password" type="password"
                                >
                            </label>
                            <label class="w-100 d-flex justify-content-center align-items-center flex-column">Ingresa
                                tu
                                password para confirmar
                                <input class="text-center form-control w-75" name="oldPassword" type="password"
                                       value="">
                            </label>
                            <input type="submit" class="mt-5 w-75 btn btn-danger" value="{{__("Update")}}">

                        </form>

                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection