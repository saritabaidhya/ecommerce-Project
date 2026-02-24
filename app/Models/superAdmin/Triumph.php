<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triumph extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'slug',
        'designation',
        'company',
        'institute',
        'status'
       
    ];
}
