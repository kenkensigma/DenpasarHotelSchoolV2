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
        return view('admin_new.HourlyProgram.hourly-based-program-list', compact('hourlyBasedPrograms'));
    }

    public function create()
    {
        return view('admin_new.HourlyProgram.hourly-based-program-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sub_reason_title' => 'required|string',
            'sub_reason_description' => 'required|string',
            'program_title' => 'required|string',
            'program_duration' => 'required|string',
            'program_description' => 'required|string',
            'program_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'highlights_title' => 'required|string',
            'highlights_description' => 'required|string',
            'target_audience_description' => 'required|string',
        ]);

        // HANDLE UPLOAD FOTO
        if ($request->hasFile('program_image')) {
            $fotoPath = $request->file('program_image')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png';
        }


        HourlyBasedProgram::create([
            'sub_reason_title' => $request->sub_reason_title,
            'sub_reason_description' => $request->sub_reason_description,
            'program_title' => $request->program_title,
            'program_duration' => $request->program_duration,
            'program_description' => $request->program_description,
            'program_image' => $fotoPath,
            'highlights_title' => $request->highlights_title,
            'highlights_description' => $request->highlights_description,
            'target_audience_description' => $request->target_audience_description,
        ]);

        return redirect()->route('admin.hourly-based-program-list')->with('success', 'Program Added');
    }

    public function edit($id)
    {
        $data = HourlyBasedProgram::findOrFail($id);
        return view('admin_new.HourlyProgram.hourly-based-program-edit', compact('data'));
    }



    public function update(Request $request, $id)
    {
        $hourly = HourlyBasedProgram::findOrFail($id);

        // Update data biasa
        $hourly->sub_reason_title = $request->sub_reason_title;
        $hourly->sub_reason_description = $request->sub_reason_description;
        $hourly->program_title = $request->program_title;
        $hourly->program_duration = $request->program_duration;
        $hourly->program_description = $request->program_description;
        $hourly->highlights_title = $request->highlights_title;
        $hourly->highlights_description = $request->highlights_description;
        $hourly->target_audience_description = $request->target_audience_description;

        // FOTO
        if ($request->hasFile('program_image')) {

            // Hapus foto lama jika ada
            if ($hourly->program_image && Storage::exists('public/' . $hourly->program_image)) {
                Storage::delete('public/' . $hourly->program_image);
            }

            // Upload baru
            $path = $request->file('program_image')->store('images', 'public');
            $hourly->program_image = $path;
        }

        $hourly->save();

        return redirect()->route('admin.hourly-based-program-list')
            ->with('success', 'Program updated!');
    }

    public function destroy($id)
    {
        $hourlyBasedPrograms = HourlyBasedProgram::findOrFail($id); // Cari foto berdasarkan ID
        $hourlyBasedPrograms->delete(); // Hapus foto

        return redirect()->route('admin.hourly-based-program-list')->with('success', 'foto berhasil dihapus!');
    }
}
