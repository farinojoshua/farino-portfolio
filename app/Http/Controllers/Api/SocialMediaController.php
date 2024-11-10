<?php

namespace App\Http\Controllers\Api;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\SocialMediaResource;

class SocialMediaController extends Controller
{
    public function index()
    {
        $social_media = SocialMedia::all();
        return SocialMediaResource::collection($social_media);
    }
}
