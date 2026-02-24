<?php

namespace App\Models\superAdmin;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
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
        'gst',
        'cost',
        'liability',
        'indemnity',
        'password'
        
       
    ];
    
    protected $casts = [
    'service' => 'array', // If you're storing JSON
];
}
