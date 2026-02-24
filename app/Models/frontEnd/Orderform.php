<?php

namespace App\Models\frontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderform extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
        'detail',
        'suburb',
        'phone',
        'email',
        'address',
        'amount',
        'category',
        'event',
        'payment_method',
        'product_ids' // stored as JSON
        
       
    ];


    // Optional: Cast JSON field
    protected $casts = [
        'product_ids' => 'array',
    ];
    
}