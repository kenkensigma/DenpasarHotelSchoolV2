<?php

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

Route::get("admin", function () {
    return view("admin.index");
})->name("admin.index")->middleware("auth");

Route::get("home", function () {
    return view("home");
})->name("home")->middleware("auth");

Route::post('/contact', [ContactController::class, 'sendContactForm'])->name('contact.send');

Route::get('/change-lang', [LangController::class, 'changeLang'])->name('changeLang');

Route::get('/admin', function () {
    return view('admin/index');
})->name('dashboard');

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

Route::get('/projects', [NewsController::class, 'list'])->name('admin.projects');
Route::get('/team-list', [TeamController::class, 'list'])->name('admin.team-list');
Route::get('/gallery-list', [GalleryController::class, 'list'])->name('admin.gallery-list');

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/team-edit', function () {
    return view('admin.team-edit');
})->name('team');

// Profile Section
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/video', function () {
    return view('video');
})->name('video');

// Program Section
Route::get('/national', function () {
    return view('national');
})->name('national');

Route::get('/international', function () {
    return view('international');
})->name('international');

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

// after click program international
Route::get('/after-click-inter', function () {
    return view('after-click-inter');
})->name('program');
Route::get('/after-click-inter2', function () {
    return view('after-click-inter2');
})->name('program');
Route::get('/after-click-inter3', function () {
    return view('after-click-inter3');
})->name('program');
Route::get('/after-click-inter4', function () {
    return view('after-click-inter4');
})->name('program');
Route::get('/after-click-inter5', function () {
    return view('after-click-inter5');
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
