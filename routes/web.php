<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PmRuanganController;
use App\Http\Controllers\LpRuanganController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ruangan
Route::resource('ruangan', RuanganController::class);
// pm_ruangan
Route::resource('pm_ruangan', PmRuanganController::class);
// lp_ruangan
Route::resource('lp_ruangan', LpRuanganController::class);
