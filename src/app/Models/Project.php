<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'analysis',
        'architecture',
        'tech_stack',
        'image',
    ];
}