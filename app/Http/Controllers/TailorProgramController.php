<?php

namespace App\Http\Controllers;
use App\Models\TailorProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TailorProgramController extends Controller
{
    public function tailorPrograms()
    {
        $tailorPrograms = TailorProgram::all();
        return view('tailorprogram', compact('tailorPrograms'));
    }
    
    public function list()
    {
        $tailorPrograms = TailorProgram::all();
        return view('admin.tailor-program-list', compact('tailorPrograms'));
    } 

    public function create()
    {
        return view('admin.tailor-program-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sub_reason_title' => 'string|max:255',
            'sub_reason_description' => 'string',
            'target_audience_title' => 'string|max:255',
            'target_audience_description' => 'string',
            'program_title' => 'string|max:255',
            'program_duration' => 'string|max:255',
            'program_description' => 'string',
            'program_image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'highlights_description' => 'string',
            'career_pathways_description' => 'string',
        ]);

        if ($request->hasFile('tailorprogram_image')) {
            $fotoPath = $request->file('tailorprogram_image')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png'; // Default image
        } 


        TailorProgram::create([
            'sub_reason_title' => $request->sub_reason_title,
            'sub_reason_description' => $request->sub_reason_description,
            'target_audience_description' => $request->target_audience_description,
            'program_title' => $request->program_title,
            'program_duration' => $request->program_duration,
            'program_description' => $request->program_description,
            'program_image' => $fotoPath,
            'highlights_title' => $request->highlights_title,
            'highlights_description' => $request->highlights_description,
            'career_pathways_description' => $request->career_pathways_description
        ]);

        return redirect()->route('admin.tailor-program-list')->with('success', 'Program Added');
    }

    public function edit($id) {
        $tailorPrograms = TailorProgram::findOrFail($id); // Pastikan ID valid
        return view('admin.tailor-program-edit', compact('tailorPrograms'));
    }
     

    public function update(Request $request, $id)
{
    $tailorPrograms = TailorProgram::find($id);
    $tailorPrograms->update($request->all()); // Gunakan findOrFail agar error lebih jelas jika tidak ditemukan

    // Update Foto
    if ($request->hasFile('image')) {
        // Hapus foto lama jika ada
        if ($tailorPrograms->image && Storage::exists('public/' . $tailorPrograms->image)) {
            Storage::delete('public/' . $tailorPrograms->image);
        }
        // Simpan foto baru
        $fotoPath = $request->file('image')->store('images', 'public');
        $tailorPrograms->image = $fotoPath;
    }


    $tailorPrograms->update(); // Simpan perubahan

    return redirect()->route('admin.tailor-program-list')->with('success', 'Data Program berhasil diperbarui!');
}
public function destroy($id)
{
    $tailorPrograms = TailorProgram::findOrFail($id); // Cari foto berdasarkan ID
    $tailorPrograms->delete(); // Hapus foto

    return redirect()->route('admin.tailor-program-list')->with('success', 'foto berhasil dihapus!');
}
}
