<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("extra.data", [
            "extra" => Extra::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("extra.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required",
            "time" => "required",
            "description" => "required",
            "logo" => "required|image|mimes:jpg,png,jpeg",
        ]);

        $file_name = rand(1000, 9999) . date("ymdHis") . '.' . $request->file('logo')->getClientOriginalName();
        $request->file('logo')->move(public_path("uploads/logo/"), $file_name);
        $validation['logo'] = $file_name;

        Extra::create($validation);

        return redirect()->route("extra.index");
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
        //
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
        Extra::find($id)->delete();

        return redirect()->route("extra.index");
    }
}
