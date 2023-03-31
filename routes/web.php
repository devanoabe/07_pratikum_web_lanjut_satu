<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('CariMahasiswa', [MahasiswaController::class, 'cariMahasiswa'])->name('cariMahasiswa');

Route::resource('mahasiswa', MahasiswaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
