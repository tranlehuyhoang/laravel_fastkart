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
    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }
   
}