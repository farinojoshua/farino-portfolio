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
        $project = Project::paginate(2);
        return ProjectResource::collection($project);
    }

    public function show(Project $project, $id)
    {
        $project = Project::find($id);
        return new ProjectResource($project);
    }
}
