<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header>
	<?php function activeMenu($url){
		return request()->is($url) ? 'active' : '';
	} ?>	
	<h1> {{ request()->url() }} </h1>
	<nav>
		<a href="{{route('home')}}" class="{{activeMenu('/')}}">Home</a>
		<a href="{{route('saludando')}}" class="{{activeMenu('saludos/*')}}">Saludando</a>
		<a href="{{route('messages.create')}}" class="{{activeMenu('mensajes/create')}}">contactos</a>
		<a href="{{route('messages.index')}}" class="{{activeMenu('mensajes/*/edit')}}">mensajes</a>
	</nav>
	</header>

	@yield('contenido')

	<footer> Copyright &copy; 2012-2013</footer>
</body>
</html>