@extends('layout')

@section('contenido')
	<p>saludos {{ $nombre }}</p>
	@forelse($maquinas as $maquina)
		<li>{{$maquina}}</li>
	@empty
		<p>no hay datos</p>
	@endforelse
@stop

