<?php

namespace App\Http\Controllers\Api;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\SkillResource;

class SkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return SkillResource::collection($skill);
    }
}
