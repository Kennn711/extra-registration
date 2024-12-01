<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Member;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    function index()
    {
        return view("member.data", [
            "member" => Member::with('user')->where('extra_id', Auth::user()->extra_id)->get()
        ]);
    }

    function create()
    {
        return view("member.form", [
            "student" => User::where("role", "student")->whereNull("extra_id")->whereDoesntHave("member")->get()
        ]);
    }

    function store(Request $request)
    {
        Member::create([
            "extra_id" => $request->extra_id,
            "student_id" => $request->student_id,
            "reason" => $request->reason,
            "date_of_registration" => Carbon::now(),
            "status" => "pending"
        ]);

        return redirect()->route("regis.index");
    }

    function status(Request $request, $id)
    {
        $member = Member::find($id);
        $member->status = $request->input('status');
        $member->save();

        return redirect()->route('member.index');
    }

    function destroy(String $id)
    {
        Member::find($id)->delete();

        return redirect()->route("member.index");
    }

    function extraDetail($extra_id)
    {
        $extra = Member::with('user')->where('extra_id', $extra_id)->get();

        return view('member/extra-detail', [
            'extra' => $extra
        ]);
    }
}
