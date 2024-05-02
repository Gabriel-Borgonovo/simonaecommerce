<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
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


    public function show($pId, $productCategory = null)
    {
        $productId = decrypt($pId);
        $product = Product::findOrFail($productId);

        // Obtener productos relacionados si se proporciona una categoría
        $relatedProducts = null;
        if ($productCategory) {
            $pCategory = $productCategory;
            $relatedProducts =  Product::where('category', $pCategory)->take(5)->get(); // Suponiendo que deseas obtener solo 5 productos relacionados
        }

        return view('showProduct', compact('product', 'relatedProducts'));
    }

    public function allProducts()
    {
        $products = Product::paginate(10);;
        return view('productos', compact('products'));
    }


    public function search(SearchRequest $request): View
    {
        $searchQuery = $request->input('busqueda'); // Get the search query from the URL

        if (!empty($searchQuery)) {
            $products = Product::where('name', 'like', "%{$searchQuery}%")
                               ->paginate(10);
        } else {
            $products = Product::paginate(10);
        }

        return view('busqueda', compact('products', 'searchQuery')); // Pass searchQuery to the view
    }


    public function productosFiltrados(Request $request)
    {
        $categoria = $request->input('categoria');
        $valor = $request->input('valor');

        // Filtrar los productos según la categoría y el valor
        if ($categoria === 'marca') {
            $productosFiltrados = Product::where('brand', $valor)->paginate(10);
        } elseif ($categoria === 'prenda') {
            $productosFiltrados = Product::where('product', $valor)->paginate(10);
        } else {
            // Si la categoría no es "marca" ni "prenda", puedes manejar el caso como desees
            // Por ejemplo, mostrar un mensaje de error o redirigir a otra página
            return redirect()->back()->with('error', 'Categoría no válida');
        }

        // Devolver la vista con los productos filtrados
        return view('productosFiltrados', compact('productosFiltrados', 'valor'));
    }

}
