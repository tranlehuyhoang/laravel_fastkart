<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $carts = Cart::where('user', $user->id)
            ->where('order', '!=', 0)
            ->orderByDesc('id')
            ->get();

        return view('client.user-dashboard', compact('user', 'carts'));
    }
}
