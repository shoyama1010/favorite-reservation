<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ShopController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    
    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/detail/{shop_id}', [ShopController::class, 'show'])->name('shop.detail');
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::post('/reservation', [ReservationController::class, 'store']);
    Route::delete('/reservation/{id}', [ReservationController::class, 'delete'])->name('reservation.delete');
    Route::get('/done', [ReservationController::class, 'done'])->name('done');

    Route::post('/favorite/{id}', [ShopController::class, 'addFavorite'])->name('shop.addFavorite');
    Route::delete('/favorite/{id}', [ShopController::class, 'removeFavorite'])->name('shop.removeFavorite');

    Route::get('/search/area', [ShopController::class, 'searchByArea'])->name('shop.searchByArea');
    Route::get('/search/genre', [ShopController::class, 'searchByGenre'])->name('shop.searchByGenre');
    Route::get('/search/name', [ShopController::class, 'searchByName'])->name('shop.searchByName');
});

Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');