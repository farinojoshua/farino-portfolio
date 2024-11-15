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
        'client',
        'project_url',
        'github_url',
    ];

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'project_service');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'project_skill');
    }
}
