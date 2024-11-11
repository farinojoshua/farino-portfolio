<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfileResource;
use App\Models\Project;
use App\Models\Testimonial;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $profile->projects_completed = Project::count();
        $profile->happy_clients = Testimonial::count();

        return new ProfileResource($profile);
    }
}
