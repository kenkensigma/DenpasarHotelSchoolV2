<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Storage;

class MuridPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $pendaftaran = Pendaftaran::all();
        return view('admin_new.Pendaftaran.daftar-list', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_new.Pendaftaran.daftar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'nomor_ponsel' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'sosmed' => 'nullable|string|max:255',
            'status' => 'required|in:0,1' // 0 = draft, 1 = published
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        } else {
            $buktiPath = null; // Bisa kosong jika bukti pembayaran tidak diunggah
        }

        Pendaftaran::create([
            'nama_lengkap' => $request->nama_lengkap,
            'asal_sekolah' => $request->asal_sekolah,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'nomor_ponsel' => $request->nomor_ponsel,
            'email' => $request->email,
            'bukti_pembayaran' => $buktiPath,
            'sosmed' => $request->sosmed,
            'status' => $request->status,
        ]);

        return redirect()->route('daftar')->with('success', 'Keep Checking at Your Email for Further Information!');
    }

    public function edit(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin_new.Pendaftaran.daftar-edit', data: compact('pendaftaran'));
    }

    public function update(Request $request, string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());

        if ($request->hasFile('bukti_pembayaran')) {
           if ($pendaftaran->bukti_pembayaran && Storage::exists('public/' . $pendaftaran->bukti_pembayaran)) {
            Storage::delete('public/' . $pendaftaran->bukti_pembayaran);
        }
        $buktiPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        $pendaftaran->bukti_pembayaran = $buktiPath;


        return redirect()->route('admin_new.Pendaftaran.daftar-list')->with('success', 'Data updated successfully!');
    }

    }
    public function destroy(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        
        return redirect()->route('admin_new.Pendaftaran.daftar-list')->with('success', 'Data deleted successfully!');
    }
}
