<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalAchivementsInformation extends Model
{
    use HasFactory;

    protected $table = 'achievements_information';
    protected $fillable = [
        'educational_id',
        'achievements'
    ];

}
