<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Page</title>	
	<style>
		* {
			font-family: "Segoe UI", sans-serif;
		}
		select, textarea, input {
			margin: 0.5rem 0;
		}
		td, th {
			border: 1px solid lightgray;
			padding: 0.25rem;
		}
		table {
			margin: 1rem 0;
		}
		html, body {
			margin: 0;
			height: 100%;
		}
		.wrapper {
			display: flex;
			height: 100%;
		}
		nav {
			display: flex;
			flex-direction: column;
			padding: 0 1rem;
		}
		nav a, nav a:visited {
			margin: 1rem 0;	
			color: black;
			text-decoration: none;
		}
		nav a:hover, .active {
			color: teal;
			font-weight: bold;
		}
		.content {
			width: 100%;
			background-color: #F0F6FB;
			padding: 0 1rem;
		}
	</style>
	@yield('head')
</head>

<body>
	<div class="wrapper">
		<nav>
			<h1>Admin Biro RPM</h1>
			@php
				function activePath($path) {
					return Request::is($path . '/*') || Request::is($path) ? 'active' : '';
				}
			@endphp
			@auth
			<a href="{{ route('dashboard.index') }}" class="{{ activePath('dashboard') }}">Dashboard</a>
			<a href="{{ route('data_pegawai.index') }}" class="{{ activePath('data_pegawai') }}">Data Pegawai</a>
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<input type="submit" value="logout"/>
			</form>
			@else
			<a href="{{ route('login') }}" class="{{ activePath('login') }}">Login</a>
			@endauth
			<a href="/">Back to site</a>
		</nav>
		<div class="content">
			@yield("content")
		</div>
	</div>
</body>

</html>