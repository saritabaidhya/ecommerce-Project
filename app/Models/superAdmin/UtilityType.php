<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'path',
        'address',
        'status',
        'meta_keyword',
        'meta_description',
        'image',
        'slug',
        'order',
        'hidden',
        'title',
        'hero'
    ];
    
    
    public function utilities()
{
    return $this->hasMany(Utility::class, 'category');
}

public function area()
{
    return $this->belongsTo(Area::class, 'address');
}

}
