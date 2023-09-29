<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::orderByDesc('id')->get();
        return view('client.cart', compact('carts'));
    }
    public function add(Request $request)
    {
        // Lấy dữ liệu từ request
        // dd($request);
        $data = $request->validate([
            'user' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'attribute' => 'required',
            'product' => 'required',
        ]);

        // Tạo mới một mục trong giỏ hàng
        $cartItem = Cart::create($data);

        // Trả về kết quả thành công hoặc thông báo lỗi
        return redirect('cart');
    }

    public function updateQuantity(Request $request, $cartItemId)
    {
        // Lấy dữ liệu từ request
        $data = $request->validate([
            'quantity' => 'required',
        ]);

        // Tìm mục trong giỏ hàng cần cập nhật
        $cartItem = Cart::findOrFail($cartItemId);

        // Cập nhật số lượng
        $cartItem->quantity = $data['quantity'];
        $cartItem->save();

        // Trả về kết quả thành công hoặc thông báo lỗi
        return response()->json(['message' => 'Quantity updated', 'cart_item' => $cartItem], 200);
    }

    public function delete($cartItemId)
    {
        // Tìm mục trong giỏ hàng cần xóa
        $cartItem = Cart::findOrFail($cartItemId);

        // Xóa mục trong giỏ hàng
        $cartItem->delete();

        // Trả về kết quả thành công hoặc thông báo lỗi
        return response()->json(['message' => 'Item deleted from cart'], 200);
    }
}
