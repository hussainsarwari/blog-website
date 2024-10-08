<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogSection extends Controller
{
    public function business(){
        return view('blog.Business.Business');
           }
}
