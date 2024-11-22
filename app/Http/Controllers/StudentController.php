<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("student.data", [
            "student" => User::where("role", "student")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name"  => "required",
            "email" => "required|unique:users",
            "password"  => "required",
            "avatar"  => "image|mimes:jpg,png,jpeg",
        ]);

        $request['password'] = bcrypt($request->password);
        $validation['role'] = "student";

        if ($request->hasFile('avatar')) {
            $file_name = rand(1000, 999) . '.' . date("ymdHis") . $request->file("avatar")->getClientOriginalName();
            $request->file("avatar")->move(public_path("uploads/avatar/"), $file_name);
            $validation['avatar'] = $file_name;
        }

        User::create($validation);

        return redirect()->route("student.index");
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
        return view("student.form-edit", [
            "student" => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
