<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        // Get the list of coupons
        $coupons = Coupon::all();

        // Return the view to display the list of coupons
        return view('admin.coupon.coupon-list', compact('coupons'));
    }

    public function create()
    {
        // Return the view to create a new coupon
        return view('admin.coupon.coupon-create');
    }
    public function edit(Coupon $coupon)
    {
        return view('admin.coupon.coupon-edit', compact('coupon'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        // dd($request);
        $validatedData = $request->validate([

            'code' => 'required|unique:coupon',
        ]);
        // Create a new coupon
        $coupon = new Coupon();
        $coupon->title = $request->input('title');
        $coupon->code = $validatedData['code'];
        $coupon->discount =  $request->input('discount');

        $coupon->status = $request->input('status') ? '1' : '0';
        $coupon->save();

        // Redirect to the coupon list page with a success message
        return redirect('admin/coupon');
    }
    public function destroy(Coupon $coupon)
    {
        // dd($category);
        // Xóa tệp hình ảnh và biểu tượng trước khi xóa danh mục

        $coupon->delete();

        return redirect('admin/coupon');
    }
    public function update(Request $request, Coupon $coupon)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'code' => 'required|unique:coupon,code,' . $coupon->id,
        ]);

        // Update the coupon with the new data
        $coupon->title = $request->input('title');
        $coupon->code = $validatedData['code'];
        $coupon->discount = $request->input('discount');
        $coupon->status = $request->input('status') ? '1' : '0';
        $coupon->save();

        // Redirect to the coupon list page with a success message
        return redirect('admin/coupon')->with('success', 'Coupon updated successfully');
    }
}
