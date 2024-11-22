<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraLeaderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, 'landingPage'])->name("landingPage");
Route::get("login", [AuthController::class, 'login'])->name("login");
Route::get("register", [AuthController::class, 'register'])->name("register");

Route::resource("extra", ExtraController::class);
Route::resource("extraleader", ExtraLeaderController::class);
Route::resource("student", StudentController::class);

Route::get('member', [MemberController::class, 'index'])->name("member.index");
Route::get('member/create', [MemberController::class, 'create'])->name("member.create");
Route::post('member/store', [MemberController::class, 'store'])->name("member.store");
Route::delete('member/{id}/', [MemberController::class, 'destroy'])->name("member.destroy");
