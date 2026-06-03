<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contact;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $contact = Contact::latest()->first();
        $profileUser = User::first();

        return view('home', compact('projects', 'contact', 'profileUser'));
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