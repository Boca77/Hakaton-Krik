<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Handle buying a product (placeholder action)
    public function buy(Product $product)
    {
        // Add your logic here for buying the product
        // For now, just return a message (you can redirect or handle payment)
        return redirect()->back()->with('success', 'You bought the product: ' . $product->name);
    }
    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}

}
