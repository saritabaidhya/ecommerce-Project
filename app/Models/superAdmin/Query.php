<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'detail',
        'status',
        'category'
        
    ];
}
