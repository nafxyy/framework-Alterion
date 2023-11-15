<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
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
    return view('home',["produk"=>Produk::take(30)->get()]);
})->name('home');


Route::get('/data/produk', function () {
    return view('data.produk',["produk"=>Produk::all()]);
})->name('data.produk');

// ------ REGSITER ----- //
Route::get('/register', function () {
    return view('authentication.registrasi');
})->name('register');

Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');

// ------ LOGIN ----- //
Route::get('/authentication', function () {
    return view('authentication.login');
})->name('login');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');


// ------ MIDDLEWARE ----- //
Route::get('/staff/produk_admin', function () {
    return view('staff.produk_admin');
})->name('staff.produk_admin')->middleware('auth');

Route::get('/staff/dashboard', function () {
    return view('staff.dashboard');
})->name('staff.dashboard')->middleware('auth');

// ------ LOGOUT ----- //
Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');

Route::get('/staff/produk_admin', function () {
    return view('staff.produk_admin',["produk"=>Produk::all()]);
})->name('staff.produk_admin');

Route::get('/staff/dashboard', function () {
    return view('staff.dashboard');
})->name('staff.dashboard');

Route::get('/staff/daftar_akun', function () {
    return view('staff.daftar_akun');
})->name('staff.daftar_akun');

Route::controller(ProdukController::class)->group(function(){
    Route::get('/staff/produk/tambah', 'tambah')->name('staff.add');
    Route::post('/staff/produk/tambah/action','store')->name('staff.store');
    Route::get('/staff/produk/edit/{id}', 'edit')->name('staff.edit');
    Route::post('/staff/produk/edit/{id}/action','update')->name('staff.update');
    Route::post('/staff/produk/delete/{id}/action', 'delete')->name('staff.delete');
});

Route::get('/staff/produk/download_excel', [ProdukController::class, 'download_excel'])->name('staff.download_excel');
