@extends('layouts.app_menu2')

@section('title', 'マイページ')

@section('content')
<div class="container">
	<h1>マイページ</h1>
	<div class="reservation-status">
		<h2>予約状況</h2>
		@foreach($reservations as $reservation)
		<div class="reservation-card">
			<h3>予約{{ $loop->iteration }}</h3>
			<p>Shop: {{ $reservation->shop->name }}</p>
			<p>Date: {{ $reservation->date }}</p>
			<p>Time: {{ $reservation->time }}</p>
			<p>Number: {{ $reservation->number }}</p>
			<form method="POST" action="{{ route('reservation.delete', $reservation->id) }}">
				@csrf
				@method('DELETE')
				<button type="submit">削除</button>
			</form>
		</div>
		@endforeach
	</div>
	<div class="favorite-shops">
		<h2>お気に入り店舗</h2>
		@foreach($favoriteShops as $shop)
		<div class="shop-card">
			<img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
			<h3>{{ $shop->name }}</h3>
			<p>{{ $shop->description }}</p>
			<a href="{{ route('shop.detail', $shop->id) }}">詳しくみる</a>
			<form method="POST" action="{{ route('shop.removeFavorite', $shop->id) }}">
				@csrf
				@method('DELETE')
				<button type="submit">お気に入りから削除</button>
			</form>
		</div>
		@endforeach
	</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection