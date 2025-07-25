<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
