<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index()
    {
        return view("member.data", [
            "member" => Member::with('user')->get()
        ]);
    }

    function create()
    {
        return view("member.form", [
            "student" => User::where("role", "student")->whereNull("extra_id")->get()
        ]);
    }

    function store(Request $request)
    {
        Member::create([
            "extra_id" => 1,
            "student_id" => $request->student_id,
            "reason" => $request->reason,
            "date_of_registration" => Carbon::now()
        ]);

        return redirect()->route("member.index");
    }
}
