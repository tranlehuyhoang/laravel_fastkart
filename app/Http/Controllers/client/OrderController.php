<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Lấy người dùng đã xác thực
        $user = auth()->user();

        // Kiểm tra người dùng đã đăng nhập hay chưa
        if ($user) {
            // Lấy giỏ hàng của người dùng hiện tại
            $carts = Cart::where('user', $user->id)
                ->where('order', 0)
                ->orderByDesc('id')
                ->get();
            // Tính toán tổng tiền cho mỗi mục trong giỏ hàng
            $carts->each(function ($cart) {
                $cart->totalPrice = $cart->quantity * $cart->price;
            });

            // Tính tổng cộng của tất cả các mục trong giỏ hàng
            $totalAmount = $carts->sum('totalPrice');
        } else {
            // Người dùng chưa đăng nhập, không có giỏ hàng
            $carts = collect();
            $totalAmount = 0;
        }

        // Lấy tất cả các coupon có status = 1
        $coupons = Coupon::where('status', 1)->get();

        return view('client.checkout', compact('carts', 'totalAmount', 'coupons'));
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'coupon' => '',
            'user' => 'required',
            'status' => '',
        ]);

        $order = Order::create($data);
        Cart::where('order', 0)
            ->where('user', $order->user)
            ->update(['order' => $order->id, 'status' => 1]);

        // Retrieve couponCode from localStorage using JavaScript
        echo '<script>var couponCode = localStorage.getItem("couponCode");</script>';

        // Update coupon status to 0
        if (!empty($data['coupon'])) {
            echo '<script>Coupon.where("code", couponCode)
                
                .update({ status: 0 });</script>';
        }

        return redirect('/');
    }
}
