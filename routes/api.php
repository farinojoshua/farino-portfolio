<?php

use App\Http\Controllers\Api\FAQController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SocialMediaController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\WorkExperienceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show']);
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/social-media', [SocialMediaController::class, 'index']);
Route::get('/work-experience', [WorkExperienceController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/faq', [FAQController::class, 'index']);
