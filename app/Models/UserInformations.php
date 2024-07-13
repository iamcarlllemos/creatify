<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformations extends Model
{
    use HasFactory;
    
    protected $table = 'user_informations';
    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'phone_no',
        'address',
        'city',
        'province',
        'gender',
        'birthday'
    ];

}
