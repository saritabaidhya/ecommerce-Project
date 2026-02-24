<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'path',
        'category',
        'point',
        'apps',
        'status',
        'slug'
    ];
    protected $casts = [        
       'point' => 'array',
    ];
}

