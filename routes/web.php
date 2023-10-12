<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LandingController::class, 'index']);

Route::prefix('/profile')->group(function(){
    Route::get('/sejarah-singkat',[LandingController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi',[LandingController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/organisasi',[LandingController::class, 'organisasi'])->name('organisasi');
    Route::get('/pengajar',[LandingController::class, 'pengajar'])->name('pengajar');
    Route::get('/extrakurikuler',[LandingController::class, 'extrakurikuler'])->name('extrakurikuler');
});

Route::get('/berita/all',[LandingController::class, 'allPost'])->name('all-post');
Route::get('/berita/{id}',[LandingController::class, 'berita']);

Route::get('/pengumuman/{id}',[LandingController::class, 'pengumuman']);

Route::get('/jurusan/tkj',[LandingController::class, 'jurusanTkj'])->name('jurusan-tkj');
Route::get('/jurusan/tkr',[LandingController::class, 'jurusanTkr'])->name('jurusan-tkr');

Route::get('/pendaftaran',[LandingController::class, 'pendaftaran'])->name('pendaftaran');
Route::get('panduan-pendaftaran',[LandingController::class, 'panduan'])->name('panduan-pendaftaran');

// route admin
Route::prefix('/admin')->group(function(){
    Route::get('/login',[adminController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login-process',[adminController::class, 'loginProcess'])->name('login-process');
    Route::post('/logout',[adminController::class, 'logout'])->name('logout');

    Route::get('/dashboard',[adminController::class, 'dashboard'])->name('dashboard')->middleware('auth');

    Route::resource('/banner' ,BannerController::class)->middleware('auth');
    Route::resource('/announcement' ,AnnouncementController::class)->middleware('auth');
    Route::resource('/post' ,PostController::class)->middleware('auth');
    Route::resource('/teacher' ,TeacherController::class)->middleware('auth');
    Route::resource('/user' ,UserController::class)->middleware('auth');
});