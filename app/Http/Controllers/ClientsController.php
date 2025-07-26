<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clients()
    {
        $clients = Clients::all();
        return view('home', compact('clients'));
    }

    public function list()
    {
        $clients = Clients::all();
        return view('admin.clients-list', compact('clients'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = 'noimage.png'; // Default image
        }

        Clients::create([
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.clients-list')->with('success', 'Client berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $client = Clients::findOrFail($id);
        return view('admin.clients-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Clients::findOrFail($id);
        $client->update($request->all());

        if ($request->hasFile('image_path')) {
            // Hapus file lama jika ada
            if ($client->image_path && file_exists(storage_path('app/public/' . $client->image_path))) {
                unlink(storage_path('app/public/' . $client->image_path));
            }
            $imagePath = $request->file('image_path')->store('images', 'public');
        } else {
            $imagePath = $client->image_path; // Tetap gunakan gambar lama jika tidak ada yang diupload
        }

        $client->update();

        return redirect()->route('admin.clients-list')->with('success', 'Client berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect()->route('admin.clients-list')->with('success', 'Client berhasil dihapus!');
    }
}
