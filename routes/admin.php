<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin.dashboard');
})->middleware('can:access_dashboard')
->name('dashboard');


Route::resource('users', UserController::class)
->middleware('can:users.manage'); //users.manage

Route::resource('products', ProductController::class)
->middleware('can:products.manage');

Route::resource('services', ServiceController::class)
->middleware('can:services.manage');
