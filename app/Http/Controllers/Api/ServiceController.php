<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ServiceResource;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return ServiceResource::collection($service);
    }
}
