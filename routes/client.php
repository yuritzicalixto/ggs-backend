<?php

use App\Http\Controllers\Client\AppointmentController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('can:access_dashboard')
->name('dashboard');



// CITAS
Route::resource('appointments', App\Http\Controllers\Client\AppointmentController::class)
->middleware('can:client.appointments.create');



// CARRITO
Route::prefix('carrito')->middleware('can:client.cart.use')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');

});


// APARTADOS
Route::prefix('apartados')->middleware('can:client.reservations.view')->name('reservations.')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('index');
});
