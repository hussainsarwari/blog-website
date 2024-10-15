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
Route::get('/Mohammad-Hussain-Sarvari',function(){
return view("Mohammad_Hussain_Sarvari");
})->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register-post');
// online tools
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
Route::get('/online-tools/extract-text-from-image', [tools::class, 'extract_text_from_image'])->name('extract_text_from_image');
Route::get('/online-tools', [tools::class, 'online_tools'])->name('online-tools');
// blog
Route::get('/blog', [blogSection::class, 'blog'])->name('blog');
Route::get('/blog/Business', [blogSection::class, 'business'])->name('business');
Route::get('/blog/business/{blog_title}', [blogSection::class, 'show_blog'])->name('business-blog');
Route::get('/blog/Technology', [blogSection::class, 'Technology'])->name('Technology');
Route::get('/blog/Technology/{blog_title}', [blogSection::class, 'show_blog'])->name('show-technology-blog');
Route::get('/blog/sport', [blogSection::class, 'sport'])->name('sport');
Route::get('/blog/sport/{blog_title}', [blogSection::class, 'show_blog'])->name('show-sport-blog');
Route::get('/blog/lifestyle', [blogSection::class, 'lifestyle'])->name('lifestyle');
Route::get('/blog/lifestyle/{blog_title}', [blogSection::class, 'show_blog'])->name('show-lifestyle-blog');
Route::get('/blog/Personal-Development', [blogSection::class, 'Personal_Development'])->name('Personal-Development');
Route::get('/blog/Personal-Development/{blog_title}', [blogSection::class, 'show_blog'])->name('show-Personal-Development-blog');
Route::get('/blog/Islamic', [blogSection::class, 'Islamic'])->name('Islamic');
Route::get('/blog/Islamic/{blog_title}', [blogSection::class, 'show_blog'])->name('show-islamic-blog');
Route::get('/blog/Fashion', [blogSection::class, 'Fashion'])->name('Fashion');
Route::get('/blog/Fashion/{blog_title}', [blogSection::class, 'show_blog'])->name('show-fashion-blog');
Route::get('/blog/Movie', [blogSection::class, 'Movie'])->name('Moview');
Route::get('/blog/Movie/{blog_title}', [blogSection::class, 'show_blog'])->name('show-movie-blog');
Route::get('/blog/Food', [blogSection::class, 'Food'])->name('Food');
Route::get('/blog/Food/{blog_title}', [blogSection::class, 'show_blog'])->name('show-food-blog');
Route::get('/blog/Travel', [blogSection::class, 'Travel'])->name('Travel');
Route::get('/blog/Travel/{blog_title}', [blogSection::class, 'show_blog'])->name('show-travel-blog');

// another route
Route::get('/blog/Guest-post', function (){
return view('Guest_post');
})->name('Guest-post');






Auth::routes();

// Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth')->name('dashboard');

