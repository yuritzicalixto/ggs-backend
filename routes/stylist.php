<?php

use App\Http\Controllers\Stylist\AppointmentController;
use App\Http\Controllers\Stylist\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');


// MIS CITAS
Route::resource('appointment', AppointmentController::class);
Route::get('/mis-citas', [AppointmentController::class, 'index'])->name('appointments.index');


// MIS CLIENTES
Route::resource('client', AppointmentController::class);
Route::get('/mis-clientes', [ClientController::class, 'index'])->name('clients.index');
