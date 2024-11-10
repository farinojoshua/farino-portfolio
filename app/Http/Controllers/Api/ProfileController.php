<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProfileResource;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return ProfileResource::make($profile);
    }
}
