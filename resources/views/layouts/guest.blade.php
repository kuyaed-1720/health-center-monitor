<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@include('partials.link')
	<title>@yield('title')</title>
</head>

<body>
	<div class="position-relative text-white" style="width: 100%; height: 100%;">
		<div class="position-absolute top-0 start-0 d-flex flex-column justify-content-evenly align-items-center bg-success"
			style="width: 25%; height: 100%;">
			<div class="brand px-5 py-5 text-lighter">
				<h1><i class="text-red bi bi-bookmark-heart"></i> Homapon<br>Health Center</h1>
			</div>
			<h2>@yield('heading')</h2>
			<p>@yield('text')</p>
			<footer class="text-muted">
				Copyright &copy; 2024 | Homapon Health Center
			</footer>
		</div>
		<div class="position-absolute top-0 end-0 d-flex justify-content-center align-items-center bg-dark"
			style="width: 75%; height: 100%;">
			@yield('content')
		</div>
	</div>
</body>
@include('partials.script')

</html>