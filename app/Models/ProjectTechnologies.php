<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnologies extends Model
{
    use HasFactory;

    protected $table = 'project_technologies';
    protected $fillable = [
        'project_id',
        'name'
    ];

}
