<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'name',
        'tagline',
        'bio',
        'email',
        'phone',
        'address',
        'profile_image',
        'years_experience',
        'available_for_work',
    ];
}
