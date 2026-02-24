<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'path',
        'status',
        'category',
        'meta_keyword',
        'meta_description',
        'slug'
    ];
}
