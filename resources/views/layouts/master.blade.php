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

<table border="7">
	<tr height="40">
		<td width="150">@include('layouts.sidebar')</td>
		<td width="250">@yield('content')</td>
	</tr>
</table>
@extends('layouts.ektensi')
</body>
</html>