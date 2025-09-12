<?php

namespace App\Http\Controllers;

use App\Models\MainNationalProgram;
use App\Models\SubNationalProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubNationalController extends Controller
{

    public function subNational($main_program_id)
    {
        $SubNationalPrograms = SubNationalProgram::with('mainProgram')
            ->where('main_program_id', $main_program_id)
            ->get();

        return view('after-click', compact('SubNationalPrograms'));
    }


    // Menampilkan semua sub program untuk admin
    public function index()
    {
        $SubNationalPrograms = SubNationalProgram::with('mainProgram')->get();
        return view('admin.sub-national-list', compact('SubNationalPrograms'));
    }

    // Form tambah sub program
    public function create()
    {
        $MainNationalPrograms = MainNationalProgram::all();
        return view('admin.sub-national-add', compact('MainNationalPrograms'));
    }

    // Simpan sub program baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'main_program_id' => 'required|exists:main_national_programs,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil tag dari main program yang dipilih
        $mainProgram = MainNationalProgram::findOrFail($validatedData['main_program_id']);

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('images', 'public')
            : null;

        SubNationalProgram::create([
            'main_program_id' => $validatedData['main_program_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'tag' => $mainProgram->tag, // Tag diambil otomatis dari main program
        ]);

        return redirect()->route('admin.sub-national-list')->with('success', 'Sub Program created successfully.');
    }

    // Form edit sub program
    public function edit(string $id)
    {
        $SubNationalProgram = SubNationalProgram::findOrFail($id);
        $MainNationalPrograms = MainNationalProgram::all();
        return view('admin.sub-national-edit', compact('SubNationalProgram', 'MainNationalPrograms'));
    }

    // Update sub program
    public function update(Request $request, string $id)
    {
        $SubNationalProgram = SubNationalProgram::findOrFail($id);

        $validatedData = $request->validate([
            'main_program_id' => 'required|exists:main_national_programs,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil tag terbaru dari main program
        $mainProgram = MainNationalProgram::findOrFail($validatedData['main_program_id']);

        $SubNationalProgram->fill([
            'main_program_id' => $validatedData['main_program_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'tag' => $mainProgram->tag,
        ]);

        if ($request->hasFile('image')) {
            if ($SubNationalProgram->image && Storage::disk('public')->exists($SubNationalProgram->image)) {
                Storage::disk('public')->delete($SubNationalProgram->image);
            }
            $SubNationalProgram->image = $request->file('image')->store('images', 'public');
        }

        $SubNationalProgram->save();

        return redirect()->route('admin.sub-national-list')->with('success', 'Sub Program updated successfully.');
    }

    // Hapus sub program
    public function destroy(string $id)
    {
        $SubNationalProgram = SubNationalProgram::findOrFail($id);

        if ($SubNationalProgram->image && Storage::disk('public')->exists($SubNationalProgram->image)) {
            Storage::disk('public')->delete($SubNationalProgram->image);
        }

        $SubNationalProgram->delete();

        return redirect()->route('admin.sub-national-list')->with('success', 'Sub Program deleted successfully.');
    }
}
