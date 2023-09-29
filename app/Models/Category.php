<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'category_name',
        'category_image',
        'icon',
        'slug',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category', 'id');
    }

    public function getProductsByCategory()
    {
        return $this->products();
    }
}
