<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'path',
        'status',
        'title',
        'hero',
        'offprice',
        'price',
        'meta_keyword',
        'meta_description',
        'image',
        'slug',
        'order',
        'unitprice',
        'benefit',
        'category',

        
    ];
     protected $casts = [
        'unitprice' => 'array', // If you're storing JSON
        'benefit' => 'array', // If you're storing JSON
    ];

     
    



}
