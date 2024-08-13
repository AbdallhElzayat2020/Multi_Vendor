<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $products = Product::where('status', 'active')
//            ->limit(10)
//            ->get();
        $products = Product::with('category')->active()->paginate(12);
        return view('frontEnd.home', compact('products'));
    }
}
