<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainInternationalController;
use App\Http\Controllers\MainNationalController;
use App\Http\Controllers\SubInternationalController;
use App\Http\Controllers\SubNationalController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TailorProgramController;
use App\Http\Controllers\InHouseProgramController;
use App\Http\Controllers\HourlyBasedProgramController;


Route::group([
    "middleware" => ("guest")
], function(){

    // Register
    // Route::get("register", [AuthController::class, "register"])->name("register");
    Route::match(["get", "post"], "register", [AuthController::class, "register"])->name("register");

    // Login
    // Route::get("login", [AuthController::class, "login"])->name("login");
    Route::match(["get", "post"], "login", [AuthController::class, "login"])->name("login");

});

Route::group([
    "middleware" => ("auth")
], function(){

    // Dashboard
    Route::get("dashboard", [AuthController::class, "dashboard"])->name("dashboard");

    // Profile
    //Route::get("profile", [AuthController::class, "profile"])->name("profile");
    Route::match(["get", "post"], "profile", [AuthController::class, "profile"])->name("profile");

    // Logout
    Route::get("logout", [AuthController::class, "logout"])->name("logout");

});

Route::get("home", function () {
    return view("home");
})->name("home")->middleware("auth");

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');

Route::get('/change-lang', [LangController::class, 'changeLang'])->name('changeLang');

// Clients resource routes
Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientsController::class, 'create'])->name('clients.create');
Route::post('/clients/store', [ClientsController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}', [ClientsController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientsController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientsController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');


// Menampilkan form tambah berita di project-add.blade.php
Route::get('/project-add', [NewsController::class, 'create'])->name('project-add'); // Alias untuk news.create
Route::get('/news', [NewsController::class, 'news'])->name('news'); // Menampilkan daftar berita
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); // Menampilkan form tambah berita
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store'); // Menyimpan berita
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/project/{id}/edit', [NewsController::class, 'edit'])->name('project.edit'); // Menampilkan form edit
Route::put('/project/{id}', [NewsController::class, 'update'])->name('project.update');
Route::delete('/project/{id}', [NewsController::class, 'destroy'])->name('project.destroy');


// Menampilkan form tambah foto di gallery-add.blade.php
Route::get('galery-add', [GalleryController::class, 'create'])->name('gallery-add');
Route::get('/galery', [GalleryController::class, 'gallery'])->name('galery'); // Menampilkan daftar Gallery
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store'); // Menyimpan berita
Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit'); // Menampilkan form edit
Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery');

// Menampilkan form tambah foto di gallery-add.blade.php
Route::get('/team-add', [TeamController::class, 'create'])->name('team-add');
Route::get('/team', [TeamController::class, 'teams'])->name('teams'); // Menampilkan daftar Gallery
Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store'); // Menyimpan berita
Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit'); // Menampilkan form edit
Route::put('/team/{id}', [TeamController::class, 'update'])->name('team.update');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');


// Menampilkan form programs-add.blade.php
Route::get('/programs-add', [ProgramController::class, 'create'])->name('programs-add');
Route::get('/programs', [ProgramController::class, 'programs'])->name('programs');
Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');
Route::get('/programs/{id}/edit', [ProgramController::class, 'edit'])->name('programs.edit');
Route::put('/programs/{id}', [ProgramController::class, 'update'])->name('programs.update');
Route::delete('/programs/{id}', [ProgramController::class, 'destroy'])->name('programs.destroy');

// =====================
// FRONTEND
// =====================
Route::get('/international', [MainInternationalController::class, 'international'])->name('international'); 
Route::get('/after-click-inter/{id}', [SubInternationalController::class, 'subInternational'])->name('after-click-inter');

// =====================
// ADMIN - MAIN PROGRAM
// =====================
Route::get('/international-add', [MainInternationalController::class, 'create'])->name('international-add');
Route::post('/international-add', [MainInternationalController::class, 'store'])->name('international-store');
Route::get('/international-edit/{id}', [MainInternationalController::class, 'edit'])->name('international-edit');
Route::put('/international-edit/{id}', [MainInternationalController::class, 'update'])->name('international-update');
Route::delete('/international-delete/{id}', [MainInternationalController::class, 'destroy'])->name('international-delete');

// =====================
// ADMIN - SUB PROGRAM
// =====================
Route::get('/sub-international-add', [SubInternationalController::class, 'create'])->name('sub-international-add');
Route::post('/sub-international-add', [SubInternationalController::class, 'store'])->name('sub-international-store');
Route::get('/sub-international-edit/{id}', [SubInternationalController::class, 'edit'])->name('sub-international-edit');
Route::put('/sub-international-edit/{id}', [SubInternationalController::class, 'update'])->name('sub-international-update');
Route::delete('/sub-international-delete/{id}', [SubInternationalController::class, 'destroy'])->name('sub-international-delete');
Route::get('/sub-international/{main_program_id}', [SubInternationalController::class, 'subInternational'])
    ->name('sub-international');


// =====================
// FRONTEND
// =====================
Route::get('/national', [MainInternationalController::class, 'international'])->name('international'); 
Route::get('/after-click/{id}', [SubInternationalController::class, 'subInternational'])->name('after-click-inter');

// =====================
// ADMIN - MAIN PROGRAM NATIONAL
// =====================
Route::get('/national-add', [MainNationalController::class, 'create'])->name('national-add');
Route::post('/national-add', [MainNationalController::class, 'store'])->name('national-store');
Route::get('/national-edit/{id}', [MainNationalController::class, 'edit'])->name('national-edit');
Route::put('/national-edit/{id}', [MainNationalController::class, 'update'])->name('national-update');
Route::delete('/national-delete/{id}', [MainNationalController::class, 'destroy'])->name('national-delete');

// =====================
// ADMIN - SUB PROGRAM NATIONAL
// =====================
Route::get('/sub-national-add', [SubNationalController::class, 'create'])->name('sub-national-add');
Route::post('/sub-national-add', [SubNationalController::class, 'store'])->name('sub-national-store');
Route::get('/sub-national-edit/{id}', [SubNationalController::class, 'edit'])->name('sub-national-edit');
Route::put('/sub-national-edit/{id}', [SubNationalController::class, 'update'])->name('sub-national-update');
Route::delete('/sub-national-delete/{id}', [SubNationalController::class, 'destroy'])->name('sub-national-delete');
Route::get('/sub-national/{main_program_id}', [SubNationalController::class, 'subNational'])
    ->name('sub-national');

//tailor program
Route::get('/tailor-program-add', [TailorProgramController::class, 'create'])->name('tailor-program-add');
Route::post('/tailor-program/store', [TailorProgramController::class, 'store'])->name('tailor-program-store');
Route::get('/tailor-program', [TailorProgramController::class, 'tailorPrograms'])->name('tailor-program');
Route::get('/tailor-program/{id}/edit', [TailorProgramController::class, 'edit'])->name('tailor-program-edit');
Route::put('/tailor-program/{id}', [TailorProgramController::class, 'update'])->name('tailor-program-update');
Route::delete('/tailor-program/{id}', [TailorProgramController::class, 'destroy'])->name('tailor-program-delete');

//in house program
Route::get('/in-house-program-add', [InHouseProgramController::class, 'create'])->name('in-house-program-add');
Route::get('/in-house-program', [InHouseProgramController::class, 'inHousePrograms'])->name('in-house-program');
Route::post('/in-house-program', [InHouseProgramController::class, 'store'])->name('in-house-program-store');
Route::get('/in-house-program/{id}/edit', [InHouseProgramController::class, 'edit'])->name('in-house-program-edit');
Route::put('/in-house-program/{id}', [InHouseProgramController::class, 'update'])->name('in-house-program-update');
Route::delete('/in-house-program/{id}', [InHouseProgramController::class, 'destroy'])->name('in-house-program-delete');

//hourly based program
Route::get('/hourly-based-program-add', [HourlyBasedProgramController::class, 'create'])->name('hourly-based-program-add');
Route::get('/hourly-based-program', [HourlyBasedProgramController::class, 'hourlyBasedPrograms'])->name('hourly-based-program');
Route::post('/hourly-based-program', [HourlyBasedProgramController::class, 'store'])->name('hourly-based-program-store');
Route::get('/hourly-based-program/{id}/edit', [HourlyBasedProgramController::class, 'edit'])->name('hourly-based-program-edit');
Route::put('/hourly-based-program/{id}', [HourlyBasedProgramController::class, 'update'])->name('hourly-based-program-update');
Route::delete('/hourly-based-program/{id}', [HourlyBasedProgramController::class, 'destroy'])->name('hourly-based-program-delete');

// Admin Routes
Route::get('/projects', [NewsController::class, 'list'])->name('admin.projects');
Route::get('/team-list', [TeamController::class, 'list'])->name('admin.team-list');
Route::get('/gallery-list', [GalleryController::class, 'list'])->name('admin.gallery-list');
Route::get('/clients-list', [ClientsController::class, 'list'])->name('admin.clients-list');
Route::get('/programs-list', [ProgramController::class, 'list'])->name('admin.programs-list');
Route::get('/international-list', [MainInternationalController::class, 'list'])->name('admin.international-list');
Route::get('/sub-international-list', [SubInternationalController::class, 'index'])->name('admin.sub-international-list');
Route::get('/national-list', [MainNationalController::class, 'list'])->name('admin.national-list');
Route::get('/sub-national-list', [SubNationalController::class, 'index'])->name('admin.sub-national-list');
Route::get('/tailor-program-list', [TailorProgramController::class, 'list'])->name('admin.tailor-program-list');
Route::get('/in-house-program-list', [InHouseProgramController::class, 'list'])->name('admin.in-house-program-list');
Route::get('/hourly-based-program-list', [HourlyBasedProgramController::class, 'list'])->name('admin.hourly-based-program-list');
Route::get('/international', [MainInternationalController::class, 'international'])->name('international');
Route::get('/national', [MainNationalController::class, 'national'])->name('national');



// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/team-edit', function () {
    return view('admin.team-edit');
})->name('team');

Route::get('/about-list', function () {
    return view('admin.about-us-list');
})->name('admin.about-us-list');

// Profile Section
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// TES ROUTE
Route::get('/adminbaru', function () {
    return view('admin_new.dashboard');
})->name('adminbaru');

Route::get('/project', function () {
    return view('admin-new.projects');
})->name('project');

Route::get('/video', function () {
    return view('video');
})->name('video');


Route::get('/tailor-program', function () {
    return view('tailor-program');
})->name('tailor-program');

Route::get('/house-training', function () {
    return view('house-training');
})->name('house-training');

Route::get('/hourly-training', function () {
    return view('hourly-training');
})->name('hourly-training');

// after click program national
Route::get('/after-click', function () {
    return view('after-click');
})->name('program');
Route::get('/after-click2', function () {
    return view('after-click2');
})->name('program');
Route::get('/after-click3', function () {
    return view('after-click3');
})->name('program');
Route::get('/after-click4', function () {
    return view('after-click4');
})->name('program');


// Portfolio (sementara diarahkan ke halaman utama karena belum ada file khusus)
Route::get('/portfolio', function () {
    return redirect()->route('home');
})->name('portfolio');

// News Section




Route::get('/news-after', function () {
    return view('news-after');
})->name('news-after');

Route::get('changeLang', function () {
    $lang = Request::get('lang'); // Ambil parameter bahasa dari URL
    if (in_array($lang, ['en', 'id'])) { // Pastikan hanya bahasa yang diizinkan
        Session::put('locale', $lang);
        App::setLocale($lang);
    }
    return redirect()->back();
})->name('changeLang');

Route::get('lang/home', [LangController::class,'index']);
Route::get('lang/change', [LangController::class,'change'])->name('changeLang');

Route::get('/test-translate', function () {
    require_once base_path('vendor/autoload.php'); // Paksa autoload ulang
    $tr = new GoogleTranslate('id');
    return $tr->translate('Hello World');
});

Route::get('/translate', [LangController::class, 'translate']);
Route::post('/translate', [LangController::class, 'translateText']);

Route::get('/news/{id}', [DetailPageController::class, 'show'])->name('news.detail');
