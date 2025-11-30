<?php

namespace App\Http\Controllers;
use App\Models\InHouseProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InHouseProgramController extends Controller
{
    public function inHousePrograms()
    {
        $inHousePrograms = InHouseProgram::all();
        return view('inhouseprogram', compact('inHousePrograms'));
    }
    
    public function list()
    {
        $inHousePrograms = InHouseProgram::all();
        return view('admin_new.In-HouseProgram.in-house-program-list', compact('inHousePrograms'));
    }

    public function create()
    {
        return view('admin_new.In-HouseProgram.in-house-program-add');
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
            'highlights_title' => 'string|max:255',
            'highlights_description' => 'string',
            'program_delivery_title' => 'string|max:255',
            'program_delivery_description' => 'string',
        ]);

        // HANDLE UPLOAD FOTO
        if ($request->hasFile('program_image')) {
            $fotoPath = $request->file('program_image')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png';
        }


        InHouseProgram::create([
            'sub_reason_title' => $request->sub_reason_title,
            'sub_reason_description' => $request->sub_reason_description,
            'target_audience_description' => $request->target_audience_description,
            'program_title' => $request->program_title,
            'program_duration' => $request->program_duration,
            'program_description' => $request->program_description,
            'program_image' => $fotoPath,
            'highlights_title' => $request->highlights_title,
            'highlights_description' => $request->highlights_description,
            'program_delivery_title' => $request->program_delivery_title,
            'program_delivery_description' => $request->program_delivery_description
        ]);

        return redirect()->route('admin.in-house-program-list')->with('success', 'Program Added');
    }

    public function edit($id) {
        $inHousePrograms = InHouseProgram::findOrFail($id); // Pastikan ID valid
        return view('admin_new.In-HouseProgram.in-house-program-edit', compact('inHousePrograms'));
    }
     

    public function update(Request $request, $id)
{
    $inHousePrograms = InHouseProgram::find($id);
    $inHousePrograms->update($request->all()); // Gunakan findOrFail agar error lebih jelas jika tidak ditemukan

    // Update Foto
    if ($request->hasFile('image')) {
        // Hapus foto lama jika ada
        if ($inHousePrograms->image && Storage::exists('public/' . $inHousePrograms->image)) {
            Storage::delete('public/' . $inHousePrograms->image);
        }
        // Simpan foto baru
        $fotoPath = $request->file('image')->store('images', 'public');
        $inHousePrograms->image = $fotoPath;
    }


    $inHousePrograms->update(); // Simpan perubahan

    return redirect()->route('admin.in-house-program-list')->with('success', 'Data Program berhasil diperbarui!');
}
public function destroy($id)
{
    $inHousePrograms = InHouseProgram::findOrFail($id); // Cari foto berdasarkan ID
    $inHousePrograms->delete(); // Hapus foto

    return redirect()->route('admin.in-house-program-list')->with('success', 'foto berhasil dihapus!');
}
}
