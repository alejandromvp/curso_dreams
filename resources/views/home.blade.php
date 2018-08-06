@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                  <?php function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                  } ?>
                <nav>
                    <a href="{{route('home')}}" class="{{activeMenu('/')}}">Home</a>
                    <a href="{{route('saludando')}}" class="{{activeMenu('saludos/*')}}">Saludando</a>
                    <a href="{{route('messages.create')}}" class="{{activeMenu('mensajes/create')}}">contactos</a>
                    <a href="{{route('messages.index')}}" class="{{activeMenu('mensajes/*/edit')}}">mensajes</a>
                </nav>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
