<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\WorkExperienceResource;

class WorkExperienceController extends Controller
{
    public function index()
    {
        $work_experience = WorkExperience::all();
        return WorkExperienceResource::collection($work_experience);
    }
}
