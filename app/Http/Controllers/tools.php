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
    public function onlinecodeeditor(){
      return view('online_code_editor');
    }
    public function onlinepdfeditor(){
      return view('online_pdf_editor');
    }
    public function pdfcompressor(){
      return view('pdf_compressor');
    }
    public function online_pdf_merging(){
      return view('online_pdf_merging');
    }
    public function online_pdf_splitting(){
      return view('online_pdf_splitting');
    }
    public function pdf_to_image(){
      return view('pdf_to_image');
    }
    public function html_to_pdf(){
      return view('html_to_pdf');
    }
    public function image_to_pdf(){
      return view('image_to_pdf');
    }
    public function online_Image_converter(){
      return view('online_Image_converter');
    }
}
