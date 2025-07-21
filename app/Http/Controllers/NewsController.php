<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Menampilkan semua berita
    public function news()
    {
        $news = News::all();
        return view('news', compact('news'));
    }
    public function list()
    {
        $news = News::all();
        return view('admin.projects', compact('news'));
    }   

    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.project-add');
    }

    // Menyimpan berita ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string',
            'date' => 'required|date',
            'title' => 'required|string',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'caption_image' => 'nullable|string',
            'tags' => 'nullable|string',
            'keyword' => 'nullable|string',
            'hit' => 'nullable|integer',
            'status' => 'required|in:0,1' // 0 = draft, 1 = published
        ]);
    
        // Simpan gambar jika ada file diupload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images', 'public');
        } else {
            $photoPath = 'noimage.png'; // Default image
        }   

        
    
        // Simpan data ke database
        News::create([
            'category' => $request->category,
            'date' => $request->date,
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $photoPath,
            'caption_image' => $request->caption_image,
            'tags' => $request->tags,
            'keyword' => $request->keyword,
            'hit' => $request->hit ?? 0,
            'status' => $request->status,
        ]);
    
        return redirect()->route('admin.projects')->with('success', 'Berita berhasil ditambahkan!');
    }
    
    public function edit($id)   {
        $news = News::findOrFail($id);
        return view('admin.project-edit',compact('news'));
    }   

    
    public function update(Request $request,$id){
        $news = News::find($id);
        $news->update($request->all());

        if ($request->hasFile('photo')) {
            // Hapus file lama jika ada
            if ($news->photo && file_exists(storage_path('app/public/' . $news->photo))) {
                unlink(storage_path('app/public/' . $news->photo));
            }
        
            // Simpan file baru ke folder 'images' dalam storage/public
            $photoPath = $request->file('photo')->store('images', 'public');
            $news->photo = $photoPath;
        }
          
        
        
        $news->update();

        
        return redirect()->route('admin.projects')->with('success', 'Berita berhasil di diupdate');
        }

        public function show($id)
{
    $news = News::findOrFail($id);

    // Tambah views setiap kali berita dibuka
    $news->increment('hit');

    return view('news-after', compact('news'));
}


public function destroy($id)
{
    $news = News::findOrFail($id); // Cari berita berdasarkan ID
    $news->delete(); // Hapus berita

    return redirect()->route('admin.projects')->with('success', 'Berita berhasil dihapus!');
}

public function index()
{
    // Ambil hanya berita yang statusnya "Show" (1)
    $news = News::where('status', 1)->orderBy('date', 'desc')->get();
    
    return view('news', compact('news'));
}

}