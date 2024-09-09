<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\tools;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/',function (){return view('index');})->name('home');
Route::get('/login',[LoginController::class , 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register-post');
Route::get('/instagram-online-video-downloader', [tools::class, 'insta_video_downloader'])->name('insta-video-downloader');
Route::get('/youtube-online-video-downloader', [tools::class, 'youtube_video_downloader'])->name('youtube-video-downloader');
Route::get('/short-url', [tools::class, 'short_url'])->name('short-url');
Route::get('/Paraphrase', [tools::class, 'paraphrase'])->name('paraphrase');
Route::get('/CV-generator', [tools::class, 'CV_generator'])->name('CV-generator');
Auth::routes();
// Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

