<?php

namespace App\Models\superAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'utility_id',
        'size',
        'color',
        'stock',
        'price',
    ];

    /**
     * Relationship: Variant belongs to a product (Utility)
     */
    public function utility()
    {
        return $this->belongsTo(Utility::class);
    }
}
