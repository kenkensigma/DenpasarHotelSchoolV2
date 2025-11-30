<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    // Menampilkan daftar tim
    public function teams()
    {
        $teams = Team::all();
        return view('team', compact('teams'));
    }
    
    public function list()
    {
        $teams = Team::all();
        return view('admin_new.Team.team-list', compact('teams'));
    } 

    public function create()
    {
        return view('admin_new.Team.team-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_panggilan' => 'required|string',
            'roles' => 'required|string',
            'desc' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'cv' => 'nullable|mimes:pdf|max:2048',
            'status' => 'required|in:0,1' // 0 = draft, 1 = published
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('images', 'public');
        } else {
            $fotoPath = 'noimage.png'; // Default image
        } 

            // Menyimpan file CV
        if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cv', 'public');
        } else {
        $cvPath = null; // Bisa kosong jika CV tidak diunggah
        }

        Team::create([
            'nama_panggilan' => $request->nama_panggilan,
            'roles' => $request->roles,
            'desc' => $request->desc,
            'foto' => $fotoPath,
            'cv' => $cvPath,
            'status' => $request->status,
        ]);
    
        return redirect()->route('teams')->with('success', 'Waiting For Approval');
    }

    public function edit($id) {
        $teams = Team::findOrFail($id); // Pastikan ID valid
        return view('admin_new.Team.team-edit', compact('teams'));
    }
     

public function update(Request $request, $id)
{
    $teams = Team::findOrFail($id);

    // Update field biasa
    $teams->nama_panggilan = $request->nama_panggilan;
    $teams->roles = $request->roles;
    $teams->desc = $request->desc;
    $teams->status = $request->status;

    // Update Foto (opsional)
    if ($request->hasFile('foto')) {
        if ($teams->foto && Storage::exists('public/' . $teams->foto)) {
            Storage::delete('public/' . $teams->foto);
        }

        $fotoPath = $request->file('foto')->store('images', 'public');
        $teams->foto = $fotoPath;
    }

    // Update CV (opsional)
    if ($request->hasFile('cv')) {
        if ($teams->cv && Storage::exists('public/' . $teams->cv)) {
            Storage::delete('public/' . $teams->cv);
        }

        $cvPath = $request->file('cv')->store('cv', 'public');
        $teams->cv = $cvPath;
    }

    $teams->save();

    return redirect()->route('admin.team-list')
        ->with('success', 'Data tim berhasil diperbarui!');
}

public function destroy($id)
{
    $teams = Team::findOrFail($id); // Cari foto berdasarkan ID
    $teams->delete(); // Hapus foto

    return redirect()->route('admin.team-list')->with('success', 'foto berhasil dihapus!');
}


}
