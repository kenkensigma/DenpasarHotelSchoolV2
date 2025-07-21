<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DetailPageController extends Controller
{
    public function show($id)
    {
        // Ambil berita berdasarkan ID
        $news = News::findOrFail($id);

        // Ambil 4 berita terbaru selain berita yang sedang dibuka
        $sideNews = News::where('status', 1) // Hanya berita aktif
                        ->where('id', '!=', $id) // Jangan tampilkan berita yang sedang dibuka
                        ->orderBy('created_at', 'desc') // Urutkan dari yang terbaru
                        ->take(4) // Ambil hanya 4 berita
                        ->get();

        return view('news-after', compact('news', 'sideNews'));
    }
}

