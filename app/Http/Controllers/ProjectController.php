<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function proekti()
    {
        $tekovni = Project::where('date_to', '>=', now())->get(); // Ongoing projects
        $zavrsheni = Project::where('date_to', '<', now())->get(); // Finished projects
        
        return view('projects.proekti', compact('tekovni', 'zavrsheni'));
    }    

    // Display single project details
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
}
