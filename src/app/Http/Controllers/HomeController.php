<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('home', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('detail', compact('project'));
    }

    public function report($id)
    {
        $project = Project::findOrFail($id);

        return view('report', compact('project'));
    }
}