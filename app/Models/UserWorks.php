<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorks extends Model
{
    use HasFactory;

    protected $table = 'user_works';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'position',
        'company',
        'from_date',
        'to_date'
    ];
}
