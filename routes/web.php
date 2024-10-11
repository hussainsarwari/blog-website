<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\tools;
use App\Http\Controllers\blogSection;
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
Route::get('/Online-code-editor', [tools::class, 'onlinecodeeditor'])->name('online_code_editor');
Route::get('/online-pdf-editor', [tools::class, 'onlinepdfeditor'])->name('onlinepdfeditor');
Route::get('/online-pdf-compressor', [tools::class, 'pdfcompressor'])->name('online_pdf_merging');
Route::get('/online-pdf-merging', [tools::class, 'online_pdf_merging'])->name('online-pdf-merging');
Route::get('/online-pdf-splitting', [tools::class, 'online_pdf_splitting'])->name('online-pdf-splitting');
Route::get('/pdf-to-image', [tools::class, 'pdf_to_image'])->name('pdf_to_image');
Route::get('/html-to-pdf', [tools::class, 'html_to_pdf'])->name('html_to_pdf');
Route::get('/image-to-pdf', [tools::class, 'image_to_pdf'])->name('image-to-pdf');
Route::get('/online-Image-converter', [tools::class, 'online_Image_converter'])->name('online-Image-converter');
Route::get('/online-images-compression', [tools::class, 'online_images_compression'])->name('online-images-compression');
Route::get('/blog/business', [blogSection::class, 'business'])->name('business');
Route::get('/blog/business/{blog_title}', [blogSection::class, 'show_blog'])->name('business');
Auth::routes();

// Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

