@extends('layouts.app_menu1')

@section('title', '飲食店詳細')

@section('content')
<div class="container">
	<h1>{{ $shop->name }}</h1>
	<img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
	<p>{{ $shop->description }}</p>
	<form method="POST" action="{{ route('reservation') }}">
		@csrf
		<input type="hidden" name="shop_id" value="{{ $shop->id }}">
		<div class="form-group">
			<label for="date">Date</label>
			<input type="date" name="date" required>
		</div>
		<div class="form-group">
			<label for="time">Time</label>
			<input type="time" name="time" required>
		</div>
		<div class="form-group">
			<label for="number">Number of People</label>
			<input type="number" name="number" required min="1">
		</div>
		<button type="submit">予約する</button>
	</form>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection