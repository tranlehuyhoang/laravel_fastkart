<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected $fillable = [
        'user',
        'quantity',
        'attribute',
        'price',
        'product',
        'order',
        'checkout',
        'status',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order', 'id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order', 'id');
    }
}
