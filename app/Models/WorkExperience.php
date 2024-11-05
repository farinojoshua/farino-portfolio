<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $table = 'work_experiences';

    protected $fillable = [
        'company_name',
        'position',
        'start_date',
        'end_date',
        'company_logo',
        'description',
        'display_order',
    ];
}
