<?php

use App\Http\Controllers\Client\AppointmentController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');



// CITAS
Route::prefix('citas')->name('appointments.')->group(function () {
    Route::get('/', [AppointmentController::class, 'index'])->name('index');

});


// CARRITO
Route::prefix('carrito')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');

});


// APARTADOS
Route::prefix('apartados')->name('reservations.')->group(function () {
    Route::get('/', [ReservationController::class, 'index'])->name('index');
});
