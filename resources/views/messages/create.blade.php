@extends('layout')

@section('contenido')
	<h1>lista de contactos</h1>
	@if(session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
	<form action="../mensajes" method="POST">
	{{csrf_field()}}
		<label for="nombre">
			Nombre
		<input type="text" name="nombre" id="nombre">
		</label><br><hr>

		<label for="email">
			Email
		<input type="text" name="email" id="email">
		</label><br><hr>

		<label for="mensaje">
			Mensaje
		<input type="text" name="mensaje" id="mensaje">
		</label><br><hr>

		<input type="submit" value="enviar">
	</form>
	@endif
@stop
