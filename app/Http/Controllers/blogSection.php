<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogSection extends Controller
{
    public function business(){
        return view('blog.Business.Business');
           }
    public function show_blog($title){
        
        return view('blog.Business.busines_blog_post',  compact('title'));
           }
}
