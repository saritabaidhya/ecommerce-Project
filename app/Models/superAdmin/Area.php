<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'detail',
        'path',
        'status',
        'meta_keyword',
        'meta_description',
        'hidden'
    ];
    
        public function utilitytypes()
{
    return $this->hasMany(UtilityType::class, 'address');
}

}
