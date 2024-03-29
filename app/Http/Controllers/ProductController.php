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


    public function show($productId)
{
    $product = Product::findOrFail($productId);

    return view('showProduct', compact('product'));
}

    public function allProducts()
    {
        $products = Product::paginate(10);;
        return view('productos', compact('products'));
    }


    public function search(Request $request): View
    {
        $searchQuery = $request->input('busqueda'); // Get the search query from the URL

        $products = Product::where('name', 'like', "%{$searchQuery}%")
                        
                        ->paginate(10); // Paginate results for efficiency

        return view('busqueda', compact('products', 'searchQuery')); // Pass searchQuery to the view
    }


}
