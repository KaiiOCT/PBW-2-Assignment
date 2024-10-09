<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::get('/', function () {
    return view('landingPage');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});
// Route::get('/buku', function () {
//     return view('buku/index');
// });
// Route::get('/buku/tambah-buku', function () {
//     return view('buku/create');
// });

Route::resource('buku', BukuController::class);
