<?php

namespace App\Models\frontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'suburb',
        'service',
        'slug',
        'website',
        'status',
        'phone',
        'email',
        'abn',
        'package',
        'gst',
        'cost',
        'indemnity',
        'liability'
        
       
    ];
    
    protected $casts = [
    'service' => 'array', // If you're storing JSON
];
}
