<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsInformation extends Model
{
    use HasFactory;

    protected $table = 'user_skills';
    protected $fillable = [
        'user_id',
        'name',
        'experience',
        'expertise',
        'description'
    ];
}
