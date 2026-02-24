<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilitysubType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'category',
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
    return $this->hasMany(Utility::class, 'subcategory');
}

public function area()
{
    return $this->belongsTo(Area::class, 'address');
}

}
