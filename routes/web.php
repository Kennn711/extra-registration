<?php

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraLeaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("extra", ExtraController::class);
Route::resource("extraleader", ExtraLeaderController::class);
