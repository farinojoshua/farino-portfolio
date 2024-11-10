<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tagline' => $this->tagline,
            'bio' => $this->bio,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'profile_image' => $this->profile_image,
            'years_experience' => $this->years_experience,
            'available_for_work' => $this->available_for_work,
        ];
    }
}
