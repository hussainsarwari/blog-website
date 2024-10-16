<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogSection extends Controller
{
    public function blog(){
        return view('blog.Blog');
    }
    public function show_blog($title){
        
        $url= url()->current();
        if (str_contains($url,"blog/business")) {
            return view('blog.Business.show_busines_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Technology")){
            return view('blog.Technology.show_technology_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/sport")){
            return view('blog.sport.show_sport_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/lifestyle")){
            return view('blog.Lifestyle.show_lifestyle_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Personal-Development")){
           
            return view('blog.Personal_Development.show_Personal Development_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Islamic")){
            return view('blog.Islamic.show_islamic_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Fashion")){
            return view('blog.fashion.show_fashion_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Movie")){
            return view('blog.movie.show_movie_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Food")){
            return view('blog.food.show_food_blog_post',  compact('title'));
        }
        else if(str_contains($url,"blog/Travel")){
            return view('blog.Travel.show_travel_blog_post',  compact('title'));
        }
        
        
    }
    public function business(){
        return view('blog.Business.Business');
           }
    public function Technology(){
        return view('blog.Technology.Teechnology');
           }
    public function sport(){
        return view('blog.sport.Sport');
           }
    public function lifestyle(){
        return view('blog.Lifestyle.Lifestyle');
           }
    public function Personal_Development(){
        return view('blog.Personal_Development.Personal_development');
           }
    public function Islamic(){
        return view('blog.Islamic.Islamic');
           }
    public function Fashion(){
        return view('blog.fashion.Fashion');
           }
    public function Movie(){
        return view('blog.movie.Movie');
           }
    public function Food(){
        return view('blog.food.Food');
           }
    public function Travel(){
        return view('blog.Travel.Travel');
           }
}
