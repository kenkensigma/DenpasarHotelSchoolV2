<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('home', compact('gallery'));
    }
}
