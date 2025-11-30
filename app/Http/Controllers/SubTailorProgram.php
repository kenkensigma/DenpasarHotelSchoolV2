<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TailorProgram;
use App\Models\TailorProgramOption;
use Illuminate\Support\Facades\Storage;

class SubTailorProgram extends Controller
{
    public function index()
    {
        $SubTailorPrograms = TailorProgramOption::with('MainTailor')->get();
        return view('admin_new.TailorProgram.sub-tailor-program-list', compact('SubTailorPrograms'));
    }

    public function create()
    {
        $SubTailorPrograms = TailorProgram::all(); // dropdown program induk
        return view('admin_new.TailorProgram.sub-tailor-program-add', compact('SubTailorPrograms'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'tailor_program_id' => 'required|exists:tailor_programs,id',
            'option_title' => 'required|string|max:255',
            'option_description' => 'required|string',
            'option_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

           if ($request->hasFile('option_image')) {
            $imagesPath = $request->file('option_image')->store('images', 'public');
        } else {
            $imagesPath = 'noimage.png'; // Default image
        } 

        TailorProgramOption::create([
            'tailor_program_id' => $validatedData['tailor_program_id'],
            'option_title' => $validatedData['option_title'],
            'option_description' => $validatedData['option_description'],
            'option_image' => $imagesPath ?? null,
        ]);

        return redirect()->route('admin.sub-tailor-program-list')->with('success', 'Sub Tailor Program successfully added!');
    }

    public function edit(string $id)
    {
        $SubTailorPrograms = TailorProgramOption::findOrFail($id);
        $tailorPrograms = TailorProgram::all(); // dropdown

        return view('admin_new.TailorProgram.sub-tailor-program-edit', compact('SubTailorPrograms', 'tailorPrograms'));
    }

    public function update(Request $request, string $id)
    {
        $SubTailorPrograms = TailorProgramOption::findOrFail($id);

        $validatedData = $request->validate([
            'tailor_program_id' => 'required|exists:tailor_programs,id',
            'option_title' => 'required|string|max:255',
            'option_description' => 'required|string',
            'option_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $SubTailorPrograms->update([
            'tailor_program_id' => $validatedData['tailor_program_id'],
            'option_title' => $validatedData['option_title'],
            'option_description' => $validatedData['option_description'],
        ]);

        // Kalau upload image baru → hapus foto lama
        if ($request->hasFile('option_image')) {
            if ($SubTailorPrograms->option_image && Storage::disk('public')->exists($SubTailorPrograms->option_image)) {
                Storage::disk('public')->delete($SubTailorPrograms->option_image);
            }
            $SubTailorPrograms->option_image = $request->file('option_image')->store('images', 'public');
            $SubTailorPrograms->save();
        }

        return redirect()->route('admin.sub-tailor-program-list')->with('success', 'Sub Tailor Program successfully updated!');
    }

    public function destroy(string $id)
    {
        $SubTailorPrograms = TailorProgramOption::findOrFail($id);

        if ($SubTailorPrograms->option_image && Storage::disk('public')->exists($SubTailorPrograms->option_image)) {
            Storage::disk('public')->delete($SubTailorPrograms->option_image);
        }

        $SubTailorPrograms->delete();

        return redirect()->route('admin.sub-tailor-program-list')->with('success', 'Sub Tailor Program deleted successfully.');
    }
}
