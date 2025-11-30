<?php

namespace App\Http\Controllers;

use App\Models\MainNationalProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainNationalController extends Controller
{
    public function national()
    {
        $MainNationalPrograms = MainNationalProgram::all();
        return view('national', compact('MainNationalPrograms'));
    }

    public function list()
    {
        $MainNationalPrograms = MainNationalProgram::all();
        return view('admin_new.NationalProgram.national-list', compact('MainNationalPrograms'));
    }
    public function create()
    {
        return view('admin_new.NationalProgram.national-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'required|unique:main_national_programs',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = 'noimage.png'; // Default image
        }

        MainNationalProgram::create([
            'title' => $validatedData['title'],
            'sub_title' => $validatedData['sub_title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'tag' => $validatedData['tag'],
        ]);

        return redirect()->route('admin.national-list')->with('success', 'National program created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $MainNationalProgram = MainNationalProgram::findOrFail($id);
        return view('admin_new.NationalProgram.national-edit', compact('MainNationalProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $MainNationalProgram = MainNationalProgram::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'required|unique:main_national_programs,tag,' . $id,
        ]);

        $MainNationalProgram->fill([
            'title' => $validatedData['title'],
            'sub_title' => $validatedData['sub_title'],
            'description' => $validatedData['description'],
            'tag' => $validatedData['tag'],
        ]);

        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($MainNationalProgram->image && file_exists(storage_path('app/public/' . $MainNationalProgram->image))) {
                unlink(storage_path('app/public/' . $MainNationalProgram->image));
            }

            // Simpan file baru ke folder 'images' dalam storage/public
            $imagePath = $request->file('image')->store('images', 'public');
            $MainNationalProgram->image = $imagePath;
        }

        $MainNationalProgram->save();

        return redirect()->route('admin.national-list')->with('success', 'Program updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $MainNationalProgram = MainNationalProgram::findOrFail($id);

        // Hapus file gambar jika ada
        if ($MainNationalProgram->image && file_exists(storage_path('app/public/' . $MainNationalProgram->image))) {
            unlink(storage_path('app/public/' . $MainNationalProgram->image));
        }

        $MainNationalProgram->delete();

        return redirect()->route('admin.national-list')->with('success', 'Program deleted successfully.');
    }
}
