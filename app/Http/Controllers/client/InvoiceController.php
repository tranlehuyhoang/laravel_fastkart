<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function index(int $cart_id)
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $carts = Cart::where('user', $user->id)
            ->where('order', '=', $cart_id)
            ->whereHas('order', function ($query) {
                $query->where('status', '=', 1);
            })
            ->orderByDesc('id')
            ->get();

        if ($carts->isEmpty()) {
            // Không có đơn hàng hoặc không có đơn hàng có status = 1, thực hiện hành động tùy chọn ở đây
            return redirect('/user');
        }

        $order = Order::find($cart_id); // Lấy thông tin đơn hàng

        return view('client.invoice', compact('user', 'carts', 'order'));
    }
    public function ordersuccess(int $cart_id)
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $carts = Cart::where('user', $user->id)
            ->where('order', '=', $cart_id)
            ->whereHas('order', function ($query) {
                $query->where('status', '=', 0);
            })
            ->orderByDesc('id')
            ->get();

        if ($carts->isEmpty()) {
            // Không có đơn hàng hoặc không có đơn hàng có status = 1, thực hiện hành động tùy chọn ở đây
            return redirect('/user');
        }
        $totalQuantity = 0;
        foreach ($carts as $cart) {
            $totalQuantity += $cart->quantity;
        }

        $order = Order::find($cart_id); // Lấy thông tin đơn hàng

        return view('client.order-success', compact('user', 'carts', 'order', 'totalQuantity'));
    }
}
