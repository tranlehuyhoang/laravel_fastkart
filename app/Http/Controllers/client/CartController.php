<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Lấy người dùng đã xác thực
        $user = auth()->user();

        // Kiểm tra người dùng đã đăng nhập hay chưa
        if ($user) {
            // Lấy giỏ hàng của người dùng hiện tại có trường "order" bằng 0
            $carts = Cart::where('user', $user->id)
                ->where('order', 0)
                ->orderByDesc('id')
                ->get();
        } else {
            // Người dùng chưa đăng nhập, không có giỏ hàng
            $carts = collect();
        }

        // Tính tổng quantity * price
        $total = $carts->sum(function ($cart) {
            return $cart->quantity * $cart->price;
        });

        return view('client.cart', compact('carts', 'total'));
    }
    public function add(Request $request)
    {
        // Lấy dữ liệu từ request
        $data = $request->validate([
            'user' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'attribute' => 'required',
            'product' => 'required',
        ]);

        // Kiểm tra sự tồn tại của mục trong giỏ hàng
        $cartItem = Cart::firstOrCreate([
            'user' => $data['user'],
            'product' => $data['product'],
            'attribute' => $data['attribute'],
            'status' => '0',
        ], $data);

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

    public function delete(Cart $cart)
    {

        // dd($cart);
        // Xóa mục trong giỏ hàng
        $cart->delete();
    }
    public function plus(Cart $cart)
    {
        $cart->quantity += 1;
        $cart->save();

        // Thực hiện các hành động khác sau khi tăng số lượng của cart


    }

    public function minus(Cart $cart)
    {
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();

            // Thực hiện các hành động khác sau khi giảm số lượng của cart
        }
    }
}