<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'github_url',
        'demo_url',
        'technologies',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];
}