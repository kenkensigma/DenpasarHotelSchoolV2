<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramCategory;


class ProgramController extends Controller
{

    public function list()
{
    // Ambil semua data program dari database
    $programs = Program::with('category')->get(); // Include relasi kategori

    // Kirim data ke view 'programs.index'
    return view('programs-list', compact('programs'));
}

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'duration' => 'nullable',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg',
    ]);

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $filename);
        $data['image'] = $filename;
    }

    Program::create($data);
    return redirect()->route('programs.index')->with('success', 'Program berhasil ditambahkan');
}
}
