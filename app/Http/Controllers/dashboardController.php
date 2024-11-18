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
}
