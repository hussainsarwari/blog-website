<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view("dashboard.Dashboard");
    }
    public function general_visit()
    {
        return view('dashboard.general_visit', [
            'visitor' => (object) [
                'ip' => '192.168.1.100',
                'date' => '2024-11-19',
                'time_spent' => 120,
                'comments' => true,
                'likes' => 5,
                'blog_visits' => [
                    ['category' => 'Technology', 'date' => '2024-11-18', 'time_spent' => 30],
                    ['category' => 'Food', 'date' => '2024-11-18', 'time_spent' => 15],
                ],
                'tool_visits' => [
                    ['name' => 'YouTube Video Downloader', 'date' => '2024-11-19', 'time_spent' => 20],
                    ['name' => 'PDF Editor', 'date' => '2024-11-19', 'time_spent' => 10],
                ],
                'activity' => [
                    ['date' => '2024-11-18', 'section' => 'Blog', 'name' => 'Technology', 'time_spent' => 30, 'liked' => true, 'commented' => false],
                    ['date' => '2024-11-19', 'section' => 'Tool', 'name' => 'YouTube Video Downloader', 'time_spent' => 20, 'liked' => true, 'commented' => true],
                ],
            ]
        ]);
        
    }
    public function command(){
        return view('dashboard.command');
    }
    public function messages(){
        return view('dashboard.message');
    }
    public function users(){
        return view('dashboard.newUser');
    }
    public function blogDetails(){
        return view('dashboard.blog');
    }
    public function add_new_blog_post(){
        return view('dashboard.add_new_blog_post');
    }
    public function add_new_author(){
        return view('dashboard.add_new_author');
    }
    public function saveContent(Request $request)
    {
        $content = $request->input('content');

        // Store the content in the database or file
        // Example: BlogPost::create(['content' => $content]);

        return response()->json(['message' => 'Content saved successfully!']);
    }
    public function uploadImage(Request $request)
    {
        // Validate the image file
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image file
        $imagePath = $request->file('image')->store('images', 'public');

        // Return the URL of the uploaded image
        return response()->json([
            'url' => asset('storage/' . $imagePath),
        ]);
    }

      // Handle link upload from Editor.js
      public function uploadLink(Request $request)
      {
          // You can process the link data here, e.g., validate the URL
          $url = $request->input('link');
   
          // You can store or process the link as needed. For now, return the link in the response.
          return response()->json([
              'success' => 1,
              'link' => $url, // Send back the URL
          ]);
      }
}



// now create a new view file for add new blog post section , it should has these items: 1 title 2 keywords 3 category 4 description 5 introduction  6 
