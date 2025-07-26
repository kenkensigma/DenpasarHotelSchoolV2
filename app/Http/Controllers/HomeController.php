<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Clients;

class HomeController extends Controller
{
public function index()
{
    $gallery = Gallery::all();
    $clients = Clients::all(); // ambil semua data klien

    return view('home', compact('gallery', 'clients'));
}

}
