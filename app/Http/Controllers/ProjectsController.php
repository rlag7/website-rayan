<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of all projects.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all projects from the database
        $projects = Project::all();

        // Pass projects to the index view
        return view('projects.index', compact('projects'));
    }

    /**
     * Display the specified project by slug.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('projects.show', compact('project'));
    }

}
