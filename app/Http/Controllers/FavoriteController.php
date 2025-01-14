<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display all favorite products for the logged-in user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the logged-in user
        $user = Auth::user();

        // Get all the products that the user has favorited
        $favoriteProducts = $user->favoriteProducts;

        // Return the favorites (e.g., pass to a view or return as JSON)
        return view('favorites.index', compact('favoriteProducts'));
    }

    /**
     * Add a product to the user's favorites.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $productId)
    {
        // Get the logged-in user
        $user = Auth::user();

        // Find the product
        $product = Product::findOrFail($productId);

        // Add the product to the user's favorites
        User::find($user->id)->favoriteProducts()->attach($product);

        // Optionally, you could redirect to a page or return a success response
        return redirect()->route('favorites.index')->with('success', 'Product added to favorites!');
    }

    /**
     * Remove a product from the user's favorites.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $productId
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $productId)
    {
        // Get the logged-in user
        $user = Auth::user();

        // Find the product
        $product = Product::findOrFail($productId);

        // Remove the product from the user's favorites
        User::find($user->id)->favoriteProducts()->detach($product);

        // Optionally, you could redirect to a page or return a success response
        return redirect()->route('favorites.index')->with('success', 'Product removed from favorites!');
    }
}
