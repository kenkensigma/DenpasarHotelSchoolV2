<?php

namespace App\Http\Controllers;
use App\Models\HourlyBasedProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HourlyBasedProgramController extends Controller
{
    public function hourlyBasedPrograms()
    {
        $hourlyBasedPrograms = HourlyBasedProgram::all();
        return view('hourlybasedprogram', compact('hourlyBasedPrograms'));
    }
    
    public function list()
    {
        $hourlyBasedPrograms = HourlyBasedProgram::all();
        return view('admin.hourly-based-program-list', compact('hourlyBasedPrograms'));
    }

    public function create()
    {
        return view('admin.hourly-based-program-add');
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
        ]);

        if ($request->hasFile('hourly_based_program_image')) {
            $fotoPath = $request->file('hourly_based_program_image')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png'; // Default image
        } 


        HourlyBasedProgram::create([
            'sub_reason_title' => $request->sub_reason_title,
            'sub_reason_description' => $request->sub_reason_description,
            'target_audience_description' => $request->target_audience_description,
            'program_title' => $request->program_title,
            'program_duration' => $request->program_duration,
            'program_description' => $request->program_description,
            'program_image' => $fotoPath,
            'highlights_title' => $request->highlights_title,
            'highlights_description' => $request->highlights_description,
        ]);

        return redirect()->route('admin.hourly-based-program-list')->with('success', 'Program Added');
    }

    public function edit($id) {
        $hourlyBasedPrograms = HourlyBasedProgram::findOrFail($id); // Pastikan ID valid
        return view('admin.hourly-based-program-edit', compact('hourlyBasedPrograms'));
    }
     

    public function update(Request $request, $id)
{
    $hourlyBasedPrograms = HourlyBasedProgram::find($id);
    $hourlyBasedPrograms->update($request->all()); // Gunakan findOrFail agar error lebih jelas jika tidak ditemukan

    // Update Foto
    if ($request->hasFile('image')) {
        // Hapus foto lama jika ada
        if ($hourlyBasedPrograms->image && Storage::exists('public/' . $hourlyBasedPrograms->image)) {
            Storage::delete('public/' . $hourlyBasedPrograms->image);
        }
        // Simpan foto baru
        $fotoPath = $request->file('image')->store('images', 'public');
        $hourlyBasedPrograms->image = $fotoPath;
    }


    $hourlyBasedPrograms->update(); // Simpan perubahan

    return redirect()->route('admin.hourly-based-program-list')->with('success', 'Data Program berhasil diperbarui!');
}
public function destroy($id)
{
    $hourlyBasedPrograms = HourlyBasedProgram::findOrFail($id); // Cari foto berdasarkan ID
    $hourlyBasedPrograms->delete(); // Hapus foto

    return redirect()->route('admin.hourly-based-program-list')->with('success', 'foto berhasil dihapus!');
}
}
