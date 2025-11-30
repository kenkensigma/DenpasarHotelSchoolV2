<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Clients;
use App\Models\News;
use App\Models\MainNationalProgram;
class HomeController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $clients = Clients::all();
        $news = News::where('status', 1)->orderBy('date', 'desc')->get();
        $mainNationalPrograms = MainNationalProgram::all();

        return view('home', compact('gallery', 'clients', 'news', 'mainNationalPrograms'));
    }
}
