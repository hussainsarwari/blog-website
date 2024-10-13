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
Route::get('/online-tools/instagram-online-video-downloader', [tools::class, 'insta_video_downloader'])->name('insta-video-downloader');
Route::get('/online-tools/youtube-online-video-downloader', [tools::class, 'youtube_video_downloader'])->name('youtube-video-downloader');
Route::get('/online-tools/short-url', [tools::class, 'short_url'])->name('short-url');
Route::get('/online-tools/Paraphrase', [tools::class, 'paraphrase'])->name('paraphrase');
Route::get('/online-tools/CV-generator', [tools::class, 'CV_generator'])->name('CV-generator');
Route::get('/online-tools/Online-code-editor', [tools::class, 'onlinecodeeditor'])->name('online_code_editor');
Route::get('/online-tools/online-pdf-editor', [tools::class, 'onlinepdfeditor'])->name('onlinepdfeditor');
Route::get('/online-tools/online-pdf-compressor', [tools::class, 'pdfcompressor'])->name('online_pdf_merging');
Route::get('/online-tools/online-pdf-merging', [tools::class, 'online_pdf_merging'])->name('online-pdf-merging');
Route::get('/online-tools/online-pdf-splitting', [tools::class, 'online_pdf_splitting'])->name('online-pdf-splitting');
Route::get('/online-tools/pdf-to-image', [tools::class, 'pdf_to_image'])->name('pdf_to_image');
Route::get('/online-tools/html-to-pdf', [tools::class, 'html_to_pdf'])->name('html_to_pdf');
Route::get('/online-tools/image-to-pdf', [tools::class, 'image_to_pdf'])->name('image-to-pdf');
Route::get('/online-tools/online-Image-converter', [tools::class, 'online_Image_converter'])->name('online-Image-converter');
Route::get('/online-tools/online-images-compression', [tools::class, 'online_images_compression'])->name('online-images-compression');
// create a view for online-tools/extract-text-from-image
Route::get('/online-tools/extract-text-from-image', [tools::class, 'online_images_compression'])->name('online-images-compression');
Route::get('/blog/Business', [blogSection::class, 'business'])->name('business');
Route::get('/blog/business/{blog_title}', [blogSection::class, 'show_blog'])->name('business');
Auth::routes();

// Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

