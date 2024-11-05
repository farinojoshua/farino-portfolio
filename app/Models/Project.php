<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'thumbnail',
        'main_image',
        'category',
        'client',
        'project_url',
        'github_url',
        'completion_date',
        'display_order',
        'is_featured',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
