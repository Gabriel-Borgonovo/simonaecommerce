<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all()->take(10);
        return view('index', compact('products'));
    }


    public function show($encryptedProductId)
    {
        $productId = Crypt::decrypt($encryptedProductId);
        $product = Product::findOrFail($productId);
        
        return view('showProduct', compact('product'));
    }


}
