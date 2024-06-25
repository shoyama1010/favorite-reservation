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

	<!-- Menu1 Modal -->
	<div id="menu1Modal" class="modal">
		<div class="modal-content">
			<span class="close" onclick="closeModal('menu1Modal')">&times;</span>
			<ul>
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('logout') }}">Logout</a></li>
				<li><a href="{{ route('mypage') }}">Mypage</a></li>
			</ul>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>