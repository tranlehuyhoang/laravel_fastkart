<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
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
    public function categorys()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
    public function attributes()
    {
        return $this->belongsTo(Attribute::class, 'attribute', 'id');
    }
    public function productsWithSameCategory()
    {
        return $this->hasMany(Product::class, 'category', 'category')->where('id', '!=', $this->id);
    }
}
