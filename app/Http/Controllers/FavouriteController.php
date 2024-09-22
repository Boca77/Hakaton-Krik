<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    // Add a product to the user's favourites
    public function store(Product $product)
    {
        auth()->user()->favourites()->attach($product->id);
        return redirect()->back()->with('success', 'Product added to favourites!');
    }
}
