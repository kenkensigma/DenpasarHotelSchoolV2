<?php

namespace App\Http\Controllers;

use App\Models\SubInternationalProgram;
use App\Models\MainInternationalProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubInternationalController extends Controller
{

    public function subInternational($main_program_id)
    {
        $SubInternationalPrograms = SubInternationalProgram::with('mainProgram')
            ->where('main_program_id', $main_program_id)
            ->get();

        return view('after-click-inter', compact('SubInternationalPrograms'));
    }


    // Menampilkan semua sub program untuk admin
    public function index()
    {
        $SubInternationalPrograms = SubInternationalProgram::with('mainProgram')->get();
        return view('admin.sub-international-list', compact('SubInternationalPrograms'));
    }

    // Form tambah sub program
    public function create()
    {
        $MainInternationalPrograms = MainInternationalProgram::all();
        return view('admin.sub-international-add', compact('MainInternationalPrograms'));
    }

    // Simpan sub program baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'main_program_id' => 'required|exists:main_international_programs,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil tag dari main program yang dipilih
        $mainProgram = MainInternationalProgram::findOrFail($validatedData['main_program_id']);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('images', 'public')
            : null;

        SubInternationalProgram::create([
            'main_program_id' => $validatedData['main_program_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'tag' => $mainProgram->tag, // Tag diambil otomatis dari main program
        ]);

        return redirect()->route('admin.sub-international-list')->with('success', 'Sub Program created successfully.');
    }

    // Form edit sub program
    public function edit(string $id)
    {
        $SubInternationalProgram = SubInternationalProgram::findOrFail($id);
        $MainInternationalPrograms = MainInternationalProgram::all();
        return view('admin.sub-international-edit', compact('SubInternationalProgram', 'MainInternationalPrograms'));
    }

    // Update sub program
    public function update(Request $request, string $id)
    {
        $SubInternationalProgram = SubInternationalProgram::findOrFail($id);

        $validatedData = $request->validate([
            'main_program_id' => 'required|exists:main_international_programs,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil tag terbaru dari main program
        $mainProgram = MainInternationalProgram::findOrFail($validatedData['main_program_id']);

        $SubInternationalProgram->fill([
            'main_program_id' => $validatedData['main_program_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'tag' => $mainProgram->tag,
        ]);

        if ($request->hasFile('image')) {
            if ($SubInternationalProgram->image && Storage::disk('public')->exists($SubInternationalProgram->image)) {
                Storage::disk('public')->delete($SubInternationalProgram->image);
            }
            $SubInternationalProgram->image = $request->file('image')->store('images', 'public');
        }

        $SubInternationalProgram->save();

        return redirect()->route('admin.sub-international-list')->with('success', 'Sub Program updated successfully.');
    }

    // Hapus sub program
    public function destroy(string $id)
    {
        $SubInternationalProgram = SubInternationalProgram::findOrFail($id);

        if ($SubInternationalProgram->image && Storage::disk('public')->exists($SubInternationalProgram->image)) {
            Storage::disk('public')->delete($SubInternationalProgram->image);
        }

        $SubInternationalProgram->delete();

        return redirect()->route('admin.sub-international-list')->with('success', 'Sub Program deleted successfully.');
    }
}
