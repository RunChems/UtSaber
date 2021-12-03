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



    <x-footer/>
@endsection
