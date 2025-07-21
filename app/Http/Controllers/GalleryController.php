<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $gallery = Gallery::all();
        return view('galery', compact('gallery'));
    }

    public function list()
    {
        $gallery = Gallery::all();
        return view('admin.gallery-list', compact('gallery'));
    }

    public function create()
    {
        return view('admin.gallery-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'images' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string',
            'status' => 'required|in:0,1' // 0 = draft, 1 = published
        ]);

        if ($request->hasFile('images')) {
            $imagesPath = $request->file('images')->store('images', 'public');
        } else {
            $imagesPath = 'noimage.png'; // Default image
        } 

        Gallery::create([
            'images' => $imagesPath,
            'description' => $request->description,
            'status' => $request->status,
        ]);
    
        return redirect()->route('admin.gallery-list')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)   {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery-edit',compact('gallery'));
    }   

    
    public function update(Request $request,$id){
        $gallery = Gallery::find($id);
        $gallery->update($request->all());

        if ($request->hasFile('images')) {
            // Hapus file lama jika ada
            if ($gallery->images && file_exists(storage_path('app/public/' . $gallery->images))) {
                unlink(storage_path('app/public/' . $gallery->images));
            }
        
            // Simpan file baru ke folder 'images' dalam storage/public
            $imagesPath = $request->file('images')->store('images', 'public');
            $gallery->images = $imagesPath;
        }
          
        
        
        $gallery->update();

        
        return redirect()->route('admin.gallery-list')->with('success', 'foto berhasil di diupdate');
        }

        public function destroy($id)
{
    $gallery = Gallery::findOrFail($id); // Cari foto berdasarkan ID
    $gallery->delete(); // Hapus foto

    return redirect()->route('admin.gallery-list')->with('success', 'foto berhasil dihapus!');
}
    }