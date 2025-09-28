<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_price', 'status', 'shipping_address', 'shipping_phone'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
