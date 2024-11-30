<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ExtraLeaderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Models\Member;
use App\Models\Registration;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, 'login'])->name("login");
Route::get("register", [AuthController::class, 'register'])->name("register");

Route::post('/login', [AuthController::class, 'loginValidation'])->name("login.validation");
Route::get('logout', [AuthController::class, 'logout'])->name("logout");

Route::get("admin/dashboard", [AuthController::class, 'dashboardAdmin'])->name("admin.index");
Route::get("leader/dashboard", [AuthController::class, 'dashboardLeader'])->name("leader.index");

Route::resource("extra", ExtraController::class);
Route::resource("extraleader", ExtraLeaderController::class);
Route::resource("student", StudentController::class);

Route::get('member', [MemberController::class, 'index'])->name("member.index");
Route::get('member/create', [MemberController::class, 'create'])->name("member.create");
Route::post('member/store', [MemberController::class, 'store'])->name("member.store");
Route::post('member/status/{id}', [MemberController::class, 'status'])->name("member.status");
Route::delete('member/{id}/', [MemberController::class, 'destroy'])->name("member.destroy");

Route::get('myextra', [RegistrationController::class, 'myextra'])->name('myextra.index');

Route::get('registration', [RegistrationController::class, 'index'])->name("regis.index");
Route::get('registration/{id}/create', [RegistrationController::class, 'create'])->name("regis.create");

Route::get("registration/landingpage", [RegistrationController::class, 'landingPageStudent'])->name("landingpage.index");
