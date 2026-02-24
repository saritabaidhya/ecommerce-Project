<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'path',
        'phone',
        'email',
        'address',
        'facebook',
        'instagram',
        'youtube',
        'meta_keyword',
        'meta_description',
        'map',
        'title',
        'hidden',
        'duration'

    ];
}
