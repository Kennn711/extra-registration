<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function landingPage()
    {
        return view("landing-page");
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }
}
