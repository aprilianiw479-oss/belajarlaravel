<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'customer_id',
        'tax',
        'discount',
        'amount',
    ];

    public function customers()
    {
        return $this->belongsTo(Orders::class, 'customer_id', 'id');
    }
}
