<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shops.detail', compact('shop'));
    }

    public function addFavorite($id)
    {
        $shop = Shop::findOrFail($id);
        Auth::user()->favorites()->attach($shop);
        return redirect()->back()->with('success', 'お気に入りに追加しました');
    }

    public function removeFavorite($id)
    {
        $shop = Shop::findOrFail($id);
        Auth::user()->favorites()->detach($shop);
        return redirect()->back()->with('success', 'お気に入りから削除しました');
    }

    public function searchByArea(Request $request)
    {
        $shops = Shop::where('region', 'like', '%' . $request->area . '%')->get();
        return view('shops.index', compact('shops'));
    }

    public function searchByGenre(Request $request)
    {
        $shops = Shop::where('genre', 'like', '%' . $request->genre . '%')->get();
        return view('shops.index', compact('shops'));
    }

    public function searchByName(Request $request)
    {
        $shops = Shop::where('name', 'like', '%' . $request->name . '%')->get();
        return view('shops.index', compact('shops'));
    }
}
