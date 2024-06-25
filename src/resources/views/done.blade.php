@extends('layouts.app_menu1')

@section('title', '予約完了')

@section('content')
<div class="container">
	<div class="complete-container">
		<h1>ご予約ありがとうございます</h1>

		<!-- <button onclick="window.location.href='{{ route('home') }}'">戻る</button> -->
		<button onclick="window.location.href='{{ route('/') }}'">戻る</button>
	</div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection