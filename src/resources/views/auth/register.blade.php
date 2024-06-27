@extends('layouts.app_menu1')

@section('title', 'Registration')

@section('content')
<div class="container">
	<div class="registration-container">
		<h2>Registration</h2>
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" required autofocus>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" required>
			</div>
			<button type="submit">登録</button>
		</form>
	</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

