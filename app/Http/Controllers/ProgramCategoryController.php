<?php

namespace App\Http\Controllers;

use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use App\Models\Program;

class ProgramCategoryController extends Controller
{
    public function list()
    {
        $categories = ProgramCategory::all();
        return view('program_categories.list', compact('categories'));
    }

    public function create()
    {
        return view('program_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        ProgramCategory::create($request->all());
        return redirect()->route('program_categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(ProgramCategory $programCategory)
    {
        return view('program_categories.edit', compact('programCategory'));
    }

    public function update(Request $request, ProgramCategory $programCategory)
    {
        $request->validate(['name' => 'required']);
        $programCategory->update($request->all());
        return redirect()->route('program_categories.index')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(ProgramCategory $programCategory)
    {
        $programCategory->delete();
        return redirect()->route('program_categories.index')->with('success', 'Kategori dihapus');
    }
}