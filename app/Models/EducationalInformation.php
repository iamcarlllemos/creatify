<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalInformation extends Model
{
    use HasFactory;

    protected $table = 'educational_information';
    protected $fillable = [
        'school',
        'from_date',
        'to_date'
    ];
}
