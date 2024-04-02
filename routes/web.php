<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

Route::get('/', [MainController::class, 'index']);
Route::controller(UserController::class)->group(function () {
  Route::resource('/users', UserController::class);
});
