<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view("registration.data", [
            "data" => Extra::get()
        ]);
    }

    public function create($id)
    {
        return view("registration.form", [
            "data" => Extra::with("leader")->find($id)
        ]);
    }

    public function landingPageStudent()
    {
        return view("registration.landing-page");
    }

    public function myextra()
    {
        return view('member.myextra', [
            "leader" => Member::with('leader')->get(),
            "member" => Member::with('user')->where('status', 'accepted')->get()
        ]);
    }
}
