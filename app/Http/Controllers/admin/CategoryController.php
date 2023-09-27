<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')->get();
        return view('admin.category.category', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.category-create');
    }


    public function store(Request $request)

    {
        // dd($request);
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'required|image',
            'icon' => 'required|image',
            'slug' => 'required',
        ]);

        $category = new Category();
        $category->category_name = $request->input('category_name');

        // Xử lý lưu tệp hình ảnh và gán đường dẫn vào các trường tương ứng
        if ($request->hasFile('category_image')) {
            $productImage = $request->file('category_image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('category'), $productImageName);
            $category->category_image = 'category/' . $productImageName;
        }

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('category_icon'), $iconName);
            $category->icon = 'category_icon/' . $iconName;
        }

        $category->slug = $request->input('slug');
        $category->save();

        return redirect('admin/category');
    }

    public function edit(Category $category)
    {
        return view('admin.category.category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_image' => 'image',
            'icon' => 'image',
            'slug' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->input('category_name');

        // Xử lý lưu tệp hình ảnh và gán đường dẫn vào các trường tương ứng
        if ($request->hasFile('category_image')) {
            // Xóa file ảnh cũ nếu tồn tại
            if ($category->category_image) {
                if (File::exists($category->category_image)) {
                    File::delete($category->category_image);
                }
            }

            $productImage = $request->file('category_image');
            $productImageName = time() . '_' . $productImage->getClientOriginalName();
            $productImage->move(public_path('category'), $productImageName);
            $category->category_image = 'category/' . $productImageName;
        }

        if ($request->hasFile('icon')) {
            // Xóa file icon cũ nếu tồn tại
            if ($category->icon) {
                if (File::exists($category->icon)) {
                    File::delete($category->icon);
                }
            }

            $icon = $request->file('icon');
            $iconName = time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('category_icon'), $iconName);
            $category->icon = 'category_icon/' . $iconName;
        }

        $category->slug = $request->input('slug');
        $category->save();

        return redirect('admin/category');
    }

    public function destroy(Category $category)
    {
        // dd($category);
        // Xóa tệp hình ảnh và biểu tượng trước khi xóa danh mục
        if (file_exists(public_path($category->category_image))) {
            unlink(public_path($category->category_image));
        }

        if (file_exists(public_path($category->icon))) {
            unlink(public_path($category->icon));
        }

        $category->delete();

        return redirect('admin/category');
    }
}
