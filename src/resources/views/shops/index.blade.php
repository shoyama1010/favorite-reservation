@extends('layouts.app_menu2')

@section('title', '飲食店一覧')

@section('content')
<div class="container">
	<h1>Rese</h1>

	<!-- 検索フォーム -->
	<div class="search-container">
		<form method="GET" action="{{ route('shop.searchByArea') }}">
			<input type="text" name="area" placeholder="エリアで検索">
			<button type="submit">検索</button>
		</form>
		<form method="GET" action="{{ route('shop.searchByGenre') }}">
			<input type="text" name="genre" placeholder="ジャンルで検索">
			<button type="submit">検索</button>
		</form>
		<form method="GET" action="{{ route('shop.searchByName') }}">
			<input type="text" name="name" placeholder="店名で検索">
			<button type="submit">検索</button>
		</form>
	</div>

	<div class="shop-list">
		@foreach($shops as $shop)
		<div class="shop-card">
			<img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
			<!-- <img src="{{ $shop->image_url }}" class="card-img-top" alt="{{ $shop->shop_name }}"> -->
			<h3>{{ $shop->name }}</h3>
			<p>{{ $shop->description }}</p>
			<a href="{{ route('shop.detail', $shop->id) }}">詳しくみる</a>

		<!-- お気に入り -->
			@if(Auth::check() && Auth::user()->favorites->contains($shop->id))
			<form method="POST" action="{{ route('shop.removeFavorite', $shop->id) }}">
				@csrf
				@method('DELETE')
				<button type="submit">お気に入りから削除</button>
			</form>
			@else
			<form method="POST" action="{{ route('shop.addFavorite', $shop->id) }}">
				@csrf
				<button type="submit">お気に入りに追加</button>
			</form>
			@endif

		</div>
		@endforeach
	</div>

</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection