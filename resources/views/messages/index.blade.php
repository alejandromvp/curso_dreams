@extends('home')

@section('contenido')
	<h1>todos los mensajes</h1>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Mensaje</th>
				<th>acciones</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($messages as $mensajes)
			<tr>
				<td><a href="/mensajes/{{$mensajes->id}}">{{ $mensajes->nombre }}</a></td>
				<td>{{ $mensajes->email }}</td>
				<td>{{ $mensajes->mensaje }}</td>
				<td>
					<a href="mensajes/{{$mensajes->id}}/edit" class="btn btn-info btn-xs">editar</a>
					<form method="POST" action="{{route('messages.destroy', $mensajes->id)}}" style="display:inline;">
						{{method_field('DELETE')}}
						{{csrf_field()}}
						<button type="submit" class="btn btn-danger">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop