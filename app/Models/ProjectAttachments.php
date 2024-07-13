<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAttachments extends Model
{
    use HasFactory;

    protected $table = 'project_attachments';
    protected $fillable = [
        'project_id',
        'caption',
        'attachment'
    ];
}
