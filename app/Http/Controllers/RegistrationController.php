<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Member;
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

    // Ini controller buat menampilkan nama leader dan member
    public function myextra()
    {
        $extra = Member::with('showextra')->where('student_id', Auth::user()->id)->get();

        return view('member.myextra', [
            "extra" => $extra
        ]);
    }
}
