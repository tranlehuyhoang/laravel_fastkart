<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(Product $product)
    {
        // dd($id);
        return view('client.product-detail', compact('product'));
    }
}
