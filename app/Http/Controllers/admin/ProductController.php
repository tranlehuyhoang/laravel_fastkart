<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('id')->get();
        $categories = Category::orderByDesc('id')->get();
        $attributes = Attribute::orderByDesc('id')->get();
        return view('admin.product.product', compact('products', 'categories', 'attributes'));
    }

    public function create()
    {
        $attributes = Attribute::orderByDesc('id')->get();
        $categories = Category::orderByDesc('id')->get();
        // dd($categories);
        return view('admin.product.product-create', compact('categories', 'attributes'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'status' => '',
            'image' => 'required|image',
            'name' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'attribute' => 'required',
            'description' => 'required',
            'meta_description' => 'required',
            'sale' => 'required|integer',
            'sale_date' => 'required|date',
            'stock' => 'required|integer',
        ]);

        $product = new Product();
        $product->status = $request->status == true ? '1'  : '0';

        if ($request->hasFile('image')) {
            $productImage = $request->file('image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('product/'), $productImageName);
            $product->image = 'product/' . $productImageName;
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->attribute = $request->input('attribute');
        $product->description = $request->input('description');
        $product->meta_description = $request->input('meta_description');
        $product->sale = $request->input('sale');
        $product->sale_date = $request->input('sale_date');
        $product->stock = $request->input('stock');
        $product->save();

        return redirect('admin/product');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'image' => 'image',
            'name' => 'required',
            'price' => 'required|integer',
            'category' => 'required',
            'attribute' => 'required',
            'description' => 'required',
            'meta_description' => 'required',
            'sale' => 'required|integer',
            'sale_date' => 'required|date',
            'stock' => 'required|integer',
        ]);

        $product = Product::findOrFail($id);
        $product->status = $request->input('status');

        if ($request->hasFile('image')) {
            if ($product->image) {
                if (file_exists(public_path($product->image))) {
                    unlink(public_path($product->image));
                }
            }

            $productImage = $request->file('image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('images'), $productImageName);
            $product->image = 'images/' . $productImageName;
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->attribute = $request->input('attribute');
        $product->description = $request->input('description');
        $product->meta_description = $request->input('meta_description');
        $product->sale = $request->input('sale');
        $product->sale_date = $request->input('sale_date');
        $product->stock = $request->input('stock');
        $product->save();

        return redirect('admin/product');
    }

    public function destroy(Product $product)
    {
        if (file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $product->delete();

        return redirect('admin/product');
    }
}
