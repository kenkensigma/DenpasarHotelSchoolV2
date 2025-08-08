<?php

namespace App\Http\Controllers;

use App\Models\MainProgram;
use Illuminate\Http\Request;

class MainPrograms extends Controller
{
    
    public function programs()
    {
        $main_programs = MainProgram::all();
        return view('programs', compact('main_programs'));
    }
    public function list()
    {
        $main_programs = MainProgram::all();
        return view('programs', compact('main_programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programs-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
        //
    }
}
