<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ExtraLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("leader.data", [
            "leader" => User::where("role", "leader")->orderBy("name", "asc")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("leader.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name"     => "required",
            "email"    => "required|unique:users",
            "password" => "required",
            "avatar"   => "nullable|image|mimes:jpg,png,jpeg",
        ]);

        $validation['password'] = bcrypt($request->password);
        $validation['role'] = "leader";

        if ($request->hasFile('avatar')) {
            $file_name = rand(1000, 9999) . '.' . date("ymdHis") . $request->file("avatar")->getClientOriginalName();
            $request->file('avatar')->move(public_path("uploads/avatar/"), $file_name);
            $validation['avatar'] = $file_name;
        }

        User::create($validation);

        return redirect()->route("extraleader.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("leader.form-edit", [
            "leader" => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $leader = User::find($id);
        $validation = $request->validate([
            "name" => "required",
            "email" => "required",
            "avatar" => "image|mimes:jpg,png,jpeg"
        ]);

        if (!empty($request->password)) {
            $validation['password'] = bcrypt($request->password);
        }

        if ($request->file('avatar')) {
            if ($request->avatar) {
                $oldAvatarPath = public_path("uploads/avatar/" . $leader->avatar);
                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }

            $file_name = rand(1000, 9999) . '.' . date("ymdHis") . $request->file('avatar')->getClientOriginalName();
            $request->file("avatar")->move(public_path("uploads/avatar/"), $file_name);
            $validation['avatar'] = $file_name;
        }

        $leader->update($validation);

        return redirect()->route("extraleader.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return redirect()->route("extraleader.index");
    }
}
