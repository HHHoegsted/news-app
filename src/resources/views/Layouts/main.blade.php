<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ config('app.name') }}</title>
		<script src="{{ asset('js/app.js') }}" defer></script>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-dark bg-primary sticky-top">
			<div class="container">
				<a class="navbar-brand" href="/">{{ config('app.name') }}</a>
			</div>
		</nav>

		<div class="container my-5">
			@yield('content')
		</div>

		<footer class="py-3 fixed-bottom mt-5">
			<div class="container d-flex justify-content-center">
				@yield('footer')
			</div>
		</footer>
	</body>
</html>
