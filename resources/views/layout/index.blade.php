<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
</head>
	<body>
		<div style="height:100px;background:#1234;"></div>
		@section('contend')
		<div style="height:100px;background:#aefcdb;"></div>
		@show


		@section('footer')
		<div style="height:100px;background:#abcdef;"></div>
		@show


		@section('js')
		@show
	</body>
</html>