<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraLeaderController;
use Illuminate\Support\Facades\Route;

Route::get("login", [AuthController::class], 'login')->name("login");
Route::get("register", [AuthController::class], 'register')->name("register");

Route::resource("extra", ExtraController::class);
Route::resource("extraleader", ExtraLeaderController::class);
