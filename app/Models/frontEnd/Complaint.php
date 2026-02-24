<?php

namespace App\Models\frontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'subject',
        'detail',
        'email',
        'category',
        'unit',
        'quantity',
        'package',
        'address',

        
       
    ];
    
}