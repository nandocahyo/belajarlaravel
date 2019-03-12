<!DOCTYPE html>
<html>
<head>
	<title>Vokasi UB</title>
</head>
<style>
	body {
  		background-color: lightblue;
	}
</style>
<body>
@include('layouts.sidebar')
<h1>Hello World!</h1>

<p>This page has a light blue background color!</p>
@yield('content')

@extends('layouts.ektensi')

</body>
</html>