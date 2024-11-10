<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'main_image',
        'service',
        'client',
        'project_url',
        'github_url',
    ];

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
