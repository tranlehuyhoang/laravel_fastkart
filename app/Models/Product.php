<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = [
        'status',
        'image',
        'name',
        'price',
        'category',
        'attribute',
        'description',
        'meta_description',
        'sale',
        'sale_date',
        'stock',
    ];
}
