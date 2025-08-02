<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    // Menampilkan daftar tim
    public function programs()
    {
        $programs = Program::all();
        return view('program', compact('programs'));
    }
    
    public function list()
    {
        $programs = Program::all();
        return view('admin.programs-list', compact('programs'));
    } 

    public function create()
    {
        return view('admin.programs-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'duration' => 'required|string|max:255',
            'category' => 'required|in:National,International,Tailor-Made,In-House-Program,Hourly-Based',
            'status' => 'required|in:0,1' // 0 = draft
        ]);

        if ($request->hasFile('image')) {
            $fotoPath = $request->file('image')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png'; // Default image
        } 


        Program::create([
            'name' => $request->name,
            'image' => $fotoPath,
            'description' => $request->description,
            'duration' => $request->duration,
            'category' => $request->category,
            'status' => $request->status
        ]);

        return redirect()->route('admin.programs-list')->with('success', 'Program Added');
    }

    public function edit($id) {
        $programs = Program::findOrFail($id); // Pastikan ID valid
        return view('admin.programs-edit', compact('programs'));
    }
     

    public function update(Request $request, $id)
{
    $programs = Program::find($id);
    $programs->update($request->all()); // Gunakan findOrFail agar error lebih jelas jika tidak ditemukan

    // Update Foto
    if ($request->hasFile('image')) {
        // Hapus foto lama jika ada
        if ($programs->image && Storage::exists('public/' . $programs->image)) {
            Storage::delete('public/' . $programs->image);
        }
        // Simpan foto baru
        $fotoPath = $request->file('image')->store('images', 'public');
        $programs->image = $fotoPath;
    }


    $programs->update(); // Simpan perubahan

    return redirect()->route('admin.programs-list')->with('success', 'Data Program berhasil diperbarui!');
}
public function destroy($id)
{
    $programs = Program::findOrFail($id); // Cari foto berdasarkan ID
    $programs->delete(); // Hapus foto

    return redirect()->route('admin.programs-list')->with('success', 'foto berhasil dihapus!');
}


}
