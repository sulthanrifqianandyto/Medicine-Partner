<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/register-proses',[LoginController::class,'register_proses'])->name('register-proses');

Route::group(['prefix'=>'admin','middleware'=>['auth'],'as'=>'admin.'],function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    Route::get('/user',[HomeController::class,'index'])->name('index');
    
    Route::get('/create',[HomeController::class,'create'])->name('user.create');
    
    Route::post('/store',[HomeController::class,'store'])->name('user.store');
    
    Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');
    
    Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');
    
    Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/store', function () {
    return view('store');
});

Route::get('/ubahprofil', function () {
    return view('ubahprofil');
});

Route::get('/detail-obat', function () {
    return view('detail-obat');
});

Route::get('/dikemas', function () {
    return view('dikemas');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/riwayat-pemesanan', function () {
    return view('riwayat-pemesanan');
});

Route::get('/selesai', function () {
    return view('selesai');
});

Route::get('/sign', function () {
    return view('sign');
});