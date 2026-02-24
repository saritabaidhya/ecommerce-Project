<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'path',
        'detail',
        'status',
        'designation',
        'experience',
        'availability',
        'expertise',
        'services'
       
    ];
     protected $casts = [
    'services' => 'array', // If you're storing JSON
    ];
}
