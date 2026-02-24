<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'purpose',
        'path',
        'status',
        'category',
        'subcategory',
        'icon',
        'meta_keyword',
        'meta_description',
        'image',
        'slug',
        'featured',
        'onsale',
        'order',
        'hidden',
        'title',
        'hero',
        'offprice',
        'price',
        'benefit',
        'variant',
        'unitprice',
        'offerings',
        'photo',
        'validity'

    ];

     protected $casts = [
    'benefit' => 'array', // If you're storing JSON
    'variant' => 'array', // If you're storing JSON
    'unitprice' => 'array', // If you're storing JSON
    'offerings' => 'array', // If you're storing JSON
];
    
public function merchants()
{
    return Merchant::whereJsonContains('service', $this->id)->get();
}

public function utilitytype()
{
    return $this->belongsTo(UtilityType::class, 'category');
}

public function utilitysubtype()
{
    return $this->belongsTo(UtilitysubType::class, 'subcategory'); // ← same key!
}


public function area()
{
    return $this->belongsTo(Area::class, 'region');
}


public function offerings()
    {
        return $this->belongsToMany(Offering::class);
    }



}
