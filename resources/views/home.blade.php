@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->check())
                        <p>{{ auth()->user()->email }}</p><br>
                        <nav class="navegacion">
                            <a href="{{route('home')}}">Home</a>    
                            <a href="{{route('messages.create')}}">Crear Mensaje</a>
                            <a href="{{route('messages.index')}}">mensajes</a>
                            @if (auth()->user()->role === 'admin')
                                <a href="{{route('usuarios.index')}}">Ver usuarios</a>
                            @endif    
                        </nav>
                        <br>
                        @yield('contenido')
                    @endif
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
