<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'supplier_id',
        'name',
        'images',
        'stock',
        'unit',
        'price',
        'discount',
        'description',
    ];

    public function suppliers()
    {
        return $this->belongsTo(Products::class, 'supplier_id', 'id');
    }
}
