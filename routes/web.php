<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return view('login');
});
Route::resource('product', ProductController::class);
Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home'); 
Route::get('user/home', function () {
    return view('user.home');
})->name('user.home'); 
Route::get('/daftar', function () {
    return view('admin.order.all');
})->name('daftar'); 
Route::get('/detail', function () {
    return view('admin.order.detail');
})->name('detail');;
Route::get('/laporan', function () {
    return view('admin.laporan.all');
})->name('laporan');;
Route::get('/laporan-detail', function () {
    return view('admin.laporan.detail');
})->name('laporan-detail');;
Route::get('user-home', function () {
    return view('user.home');
})->name('user.home');;
Route::get('belanja', function () {
    return view('user.belanja');
})->name('catalog');;
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/course', function(){
    return view('course');
})->name('course');
Route::get('/info', function(){
    return view('info');
})->name('info');