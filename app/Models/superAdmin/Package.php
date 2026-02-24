<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'path',
        'member',
        'point',
        'status',
        'slug',
        'offering'
    ];
    protected $casts = [        
       'point' => 'array',
    ];

    public function offerings()
    {
        return $this->belongsToMany(Offering::class);
    }
}

