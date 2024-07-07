<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsInformation extends Model
{
    use HasFactory;

    protected $table = 'projects_information';
    protected $fillable = [
        'user_id',
        'category',
        'caption',
        'description'
    ];
}
