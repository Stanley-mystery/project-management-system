<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 


class ProductService
{
    /**
     * Get  products with its reviews and category by ID.
     *
     * @param int $id
     * @return \App\Models\Product
     */
    public function getProductsWithReviewsAndCategory()
    {
        return Product::with(['reviews', 'category'])->get();
    }


    public function getProductsInSameCategory($id) {
      
      $product = $this->getProduct($id);

      return  Product::where('category_id', $product->category_id)
      ->where('id', '!=', $product->id) 
      ->get();
    }


     /**
     * Get a product with its reviews and category by ID.
     *
     * @param int $id
     * @return \App\Models\Product
     */
    public function getProduct($id)
    {
        return Product::with(['reviews', 'category'])->findOrFail($id);
    }



  /**
     * Get a favorite product.
     *
     * 
     * @return \App\Models\Product
     */
    public function getFavoriteProduct(){

         // Get the authenticated user
      $user = Auth::user();

      return  $user->favoriteProducts->pluck('id')->toArray();
    }



    /**
     * Handle the logic of creating a new product.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Models\Product
     */
    public function createProduct(Request $request)
    {
        // Validate the product data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create the product with validated data
        $product = Product::create([
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['name']),
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'user_id' => auth()->id(),
            'category_id' => $validatedData['category_id'],
        ]);

        return $product;
    }




}
