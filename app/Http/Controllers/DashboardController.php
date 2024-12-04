<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('dashboard.leader');
    }
}
