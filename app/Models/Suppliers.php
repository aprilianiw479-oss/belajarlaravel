<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'name',
        'address',
        'province',
        'city',
        'postcode',
        'phone',
        'fax',
    ];
    
    public function products()
    {
        return $this->hasMany(Products::class, 'supplier_id', 'id');
    }
}
