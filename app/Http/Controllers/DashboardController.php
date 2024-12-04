<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $student = User::where('role', 'student')->count();
        $leader = User::where('role', 'leader')->count();
        $extra = Extra::count();

        $leaderName = User::where('role', 'leader')->limit(3)->get();
        return view('dashboard.admin', compact('student', 'leader', 'extra', 'leaderName'));
    }

    public function dashboardLeader()
    {
        $memberActive = Member::where('status', 'accepted')->where('extra_id', Auth::user()->extra_id)->count();
        $memberPending = Member::where('status', 'pending')->count();
        $extraName = Extra::where('id', Auth::user()->extra_id)->get();
        $memberIdentity = Member::with('user')->where('extra_id', Auth::user()->extra_id)->limit(3)->get();

        return view('dashboard.leader', [
            "memberActive" => $memberActive,
            "memberPending" => $memberPending,
            "extraName" => $extraName,
            "memberIdentity" => $memberIdentity
        ]);
    }
}
