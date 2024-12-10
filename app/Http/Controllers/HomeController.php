<?php

namespace App\Http\Controllers;
use App\Models\Project; // Import the Project model

class HomeController extends Controller
{
    public function index()
    {
        // Fetch projects from the database
        $projects = Project::latest()->take(6)->get(); // Adjust the number as needed

        // Pass projects to the view
        return view('home', compact('projects'));
    }
}
