<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
	@yield('styles')
</head>

<body>
	<div class="container">
		@yield('content')
	</div>

	<!-- Menu2 Modal -->
	<div id="menu2Modal" class="modal">
		<div class="modal-content">
			<span class="close" onclick="closeModal('menu2Modal')">&times;</span>
			<ul>
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('register') }}">Registration</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
			</ul>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>