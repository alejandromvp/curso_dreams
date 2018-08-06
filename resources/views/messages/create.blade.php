@extends('home')

@section('contenido')
	<h1>lista de contactos</h1>
	@if(session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
	<form action="../mensajes" method="POST">
	{{csrf_field()}}
		<label for="nombre">
			Nombre
		<input type="text" name="nombre" id="nombre" class="form-control">
		</label><br><hr>

		<label for="email">
			Email
		<input type="text" name="email" id="email" class="form-control">
		</label><br><hr>

		<label for="mensaje">
			Mensaje
		<input type="text" name="mensaje" id="mensaje" class="form-control">
		</label><br><hr>

		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
	@endif
@stop
