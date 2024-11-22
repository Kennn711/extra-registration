<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function landingPage()
    {
        return view("landing-page");
    }

    function login()
    {
        return view("login");
    }

    function register()
    {
        return view("register");
    }

    function dashboardAdmin()
    {
        return view("dashboard.admin");
    }

    function dashboardLeader()
    {
        return view("dashboard.leader");
    }

    function loginValidation(Request $request)
    {
        $validation = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route("admin.index");
            } elseif ($user->role == 'leader') {
                return redirect()->route("leader.index");
            }
        }
    }

    function logout()
    {
        Auth::logout();

        return redirect()->route("login");
    }
}
