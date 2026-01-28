<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('can:access_dashboard')
->name('dashboard');

// Route::get('/admin', function () {
//     return 'Hola desde el administrador';
// })->name('admin.dashboard');
