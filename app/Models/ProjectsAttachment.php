<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsAttachment extends Model
{
    use HasFactory;

    protected $table = 'projects_attachments';
    protected $fillable = [
        'project_id',
        'caption',
        'attachment'
    ];
}
