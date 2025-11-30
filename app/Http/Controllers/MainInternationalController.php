<?php

namespace App\Http\Controllers;

use App\Models\MainInternationalProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainInternationalController extends Controller
{
    // Menampilkan list main program untuk public
    public function international()
    {
        $MainInternationalPrograms = MainInternationalProgram::all();
        return view('international', compact('MainInternationalPrograms'));
    }

    // Menampilkan list main program untuk admin
    public function list()
    {
        $MainInternationalPrograms = MainInternationalProgram::all();
        return view('admin_new.InternationalProgram.international-list', compact('MainInternationalPrograms'));
    }

    // Form tambah main program
    public function create()
    {
        return view('admin_new.InternationalProgram.international-add');
    }

    // Simpan main program baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'required|unique:main_international_programs',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = 'noimage.png'; // Default image
        }

        MainInternationalProgram::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'tag' => $validatedData['tag'],
        ]);

        return redirect()->route('admin.international-list')->with('success', 'Program created successfully.');
    }

    // Form edit main program
    public function edit(string $id)
    {
        $MainInternationalProgram = MainInternationalProgram::findOrFail($id);
        return view('admin_new.InternationalProgram.international-edit', compact('MainInternationalProgram'));
    }

    // Update main program
    public function update(Request $request, string $id)
    {
        $MainInternationalProgram = MainInternationalProgram::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'required|unique:main_international_programs,tag,' . $id,
        ]);

        $MainInternationalProgram->fill([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'tag' => $validatedData['tag'],
        ]);

        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($MainInternationalProgram->image && file_exists(storage_path('app/public/' . $MainInternationalProgram->image))) {
                unlink(storage_path('app/public/' . $MainInternationalProgram->image));
            }
        
            // Simpan file baru ke folder 'images' dalam storage/public
            $imagePath = $request->file('image')->store('images', 'public');
            $MainInternationalProgram->image = $imagePath;
        }

        $MainInternationalProgram->save();

        return redirect()->route('admin.international-list')->with('success', 'Program updated successfully.');
    }

    // Hapus main program
    public function destroy(string $id)
    {
        $MainInternationalProgram = MainInternationalProgram::findOrFail($id);

        if ($MainInternationalProgram->image && Storage::disk('public')->exists($MainInternationalProgram->image)) {
            Storage::disk('public')->delete($MainInternationalProgram->image);
        }

        $MainInternationalProgram->delete();

        return redirect()->route('admin.international-list')->with('success', 'Program deleted successfully.');
    }
}
