<?php

namespace App\Models\frontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'suburb',
        'phone',
        'email'
        
       
    ];
    
}