<?php

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',["produk"=>Produk::take(12)->get()]);
});

Route::get('/authentication', function () {
    return view('authentication.login');
})->name('login');

Route::get('/data/produk', function () {
    return view('data.produk',["produk"=>Produk::all()]);
})->name('data.produk');

Route::get('/data/kategori', function () {
    return view('data.kategori');
})->name('data.kategori');

Route::get('/data/member', function () {
    return view('data.member');
})->name('data.member');
