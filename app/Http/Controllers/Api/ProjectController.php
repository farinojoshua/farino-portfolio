<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProjectResource;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return ProjectResource::collection($project);
    }

    public function show(Project $project)
    {
        $project = Project::find($project->id);
        return ProjectResource::make($project);
    }
}
