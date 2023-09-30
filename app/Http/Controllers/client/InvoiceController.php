<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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

        return view('client.invoice', compact('user', 'carts'));
    }
}
