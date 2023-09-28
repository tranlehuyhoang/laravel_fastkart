<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    public function index()
    {
        // Lấy danh sách các thuộc tính
        $attributes = Attribute::all();

        // Trả về view hiển thị danh sách thuộc tính
        return view('admin.attribute.attribute', compact('attributes'));
    }

    public function create()
    {
        // Trả về view để tạo thuộc tính mới
        return view('admin.attribute.attribute-create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'name' => 'required|string',
            'value' => 'required|string',
        ]);

        // Tạo thuộc tính mới
        $attribute = Attribute::create($validatedData);

        // Chuyển hướng đến trang danh sách thuộc tính
        return redirect('admin/attribute')->with('success', 'Attribute created successfully.');
    }

    public function edit(Attribute $attribute)
    {
        // Trả về view để chỉnh sửa thuộc tính
        return view('admin.attribute.attribute-edit', compact('attribute'));
    }

    public function update(Request $request, Attribute $attribute)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'name' => 'required|string',
            'value' => 'required|string',
        ]);

        // Cập nhật thuộc tính
        $attribute->update($validatedData);

        // Chuyển hướng đến trang danh sách thuộc tính
        return redirect('admin/attribute')->with('success', 'Attribute created successfully.');
    }

    public function destroy(Attribute $attribute)
    {
        // Xóa thuộc tính
        $attribute->delete();

        // Chuyển hướng đến trang danh sách thuộc tính
        return redirect('admin/attribute')->with('success', 'Attribute created successfully.');
    }
}
