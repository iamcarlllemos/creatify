<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProjects extends Model
{
    use HasFactory;

    protected $table = 'user_projects';
    protected $fillable = [
        'user_id',
        'caption',
        'date_started',
        'date_finished',
        'description'
    ];

    public function technologies() {
        return $this->hasMany(ProjectTechnologies::class, 'project_id');
    }

    public function attachments() {
        return $this->hasMany(ProjectAttachments::class, 'project_id');
    }

}
