<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Repositories\Cart\CartRepository;
use Illuminate\Support\Facades\Request;

class CheckoutController extends Controller
{
    public function create(CartRepository $cart)
    {
        return view('frontend.checkout', [
            'cart' => $cart
        ]);
    }

    public function store(Request $request, CartRepository $cart)
    {
        // $request->validate([
        //     'first_name' =>
        // ])
        $order = Order::create([
            'store_id' => null,
        ]);
    }
}
