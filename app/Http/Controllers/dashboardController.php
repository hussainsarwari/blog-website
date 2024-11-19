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
}
