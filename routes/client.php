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
Route::resource('carts', App\Http\Controllers\Client\CartController::class)
->middleware('can:client.cart.use');

// Route::prefix('carrito')->middleware('can:client.cart.use')->name('cart.')->group(function () {
//     Route::get('/', [CartController::class, 'index'])->name('index');

// });


// APARTADOS
Route::resource('reservations', App\Http\Controllers\Client\ReservationController::class)
->middleware('can:client.reservations.view');
// Route::prefix('apartados')->middleware('can:client.reservations.view')->name('reservations.')->group(function () {
//     Route::get('/', [ReservationController::class, 'index'])->name('index');
//     Route::get('/', [ReservationController::class, 'index'])->name('index');
//     Route::get('/crear', [ReservationController::class, 'create'])->name('create');
//     Route::post('/', [ReservationController::class, 'store'])->name('store');
// });
