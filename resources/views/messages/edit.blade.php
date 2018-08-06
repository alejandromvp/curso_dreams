@extends('home')

@section('contenido')

	<h1>editar mensaje de {{ $mensaje->nombre }} </h1>
	<form action="{{ route('messages.update', $mensaje->id) }}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="nombre">
			Nombre
		<input type="text" name="nombre" id="nombre" value="{{$mensaje->nombre }}" class="form-control">
		</label><br><hr>

		<label for="email">
			Email
		<input type="text" name="email" id="email" value="{{$mensaje->email }}" class="form-control">
		</label><br><hr>

		<label for="mensaje">
			Mensaje
		<input type="text" name="mensaje" id="mensaje" value="{{$mensaje->mensaje }}" class="form-control">
		</label><br><hr>

		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop