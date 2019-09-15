<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ config('app.name', 'Notes') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/summernote-lite.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img width="170" src="{{ asset('images/logo.png') }}" alt="" /></span>
						
						<a href="{{ url('/') }}">
							<h1>{{ config('app.name', 'Notes') }}</h1>
						</a>
						<p>Remember Everything</p>
					</header>

				<!-- Nav -->
					@yield('nav')
				<!-- Main -->
					<div id="main">

						@yield('content')

					</div>

				<!-- Footer -->
					<footer id="footer">
						@yield('footer')
					</footer>

			</div>

		@yield('scripts')

	</body>
</html>