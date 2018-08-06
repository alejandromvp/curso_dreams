@extends('home')

@section('contenido')
	<h1>Usuarios</h1>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>role</th>
				<th>acciones</th>
			</tr>
		</thead>
		<tbody class="thead-light">
			@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role }}</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop