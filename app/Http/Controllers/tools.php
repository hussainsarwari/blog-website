<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tools extends Controller
{
   public function insta_video_downloader(){
 return view('insta-video-downloader');
    }
    public function youtube_video_downloader(){
      return view('youtube_video_downloader');
    }
    public function short_url(){
      return view('short-url');
    }
    public function paraphrase(){
      return view('paraphrase');
    }
    public function CV_generator(){
      return view('CV_generator');
    }
}
