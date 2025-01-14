<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 


class ProductController extends Controller
{

    protected $productService;

    // Inject the ProductService into the controller
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    

   // Show a product with its reviews
   public function show($id)
   {
       $product = $this->productService->getProduct($id);
       $products =  $this->productService->getProductsInSameCategory($id);
       $favoriteProductIds = $this->productService->getFavoriteProduct();

       return view('products.show', compact(['product', 'products', 'favoriteProductIds']));
   }

   // Show the form to create a new product
   public function create()
   {
       return view('products.create');
   }

   // Store a new product
   public function store(Request $request)
   {
    $product = $this->productService->createProduct($request);

       return redirect()->route('products.show', $product->id);
   }

   // Show the form to edit a product
   public function edit($id)
   {
       $product = Product::findOrFail($id);
       return view('products.edit', compact('product'));
   }

   // Update a product
   public function update(Request $request, $id)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'description' => 'required|string',
           'price' => 'required|numeric',
       ]);

       $product = Product::findOrFail($id);
       $product->update([
           'name' => $request->name,
           'slug' => Str::slug($request->name),
           'description' => $request->description,
           'price' => $request->price,
       ]);

       return redirect()->route('products.show', $product->id);
   }

   // Store a review for a product
   public function storeReview(Request $request, $productId)
   {
       $request->validate([
           'rating' => 'required|in:1,2,3,4,5', // Validate rating
           'comment' => 'nullable|string',
       ]);

       $review = Review::create([
           'product_id' => $productId,
           'user_id' => auth()->id(), // Assuming the user is logged in
           'rating' => $request->rating,
           'comment' => $request->comment,
       ]);

       return redirect()->route('products.show', $productId);
   }

    // Delete a review
    public function destroyReview($reviewId)
    {
        $review = Review::findOrFail($reviewId); // Find the review by ID
        $review->delete(); // Delete the review
        return redirect()->back()->with('success', 'Review deleted successfully'); // Redirect back with success message
    }



    public function toggleFavorite(Request $request)
    {

        dd($request);
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        // Retrieve the product
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], 404);
        }

        $auth_user = Auth::user();  // Get the authenticated user
        dd($auth_user);

        // Find the user explicitly by its ID
        $user = User::find($auth_user->id);

        // Update the favorite status (user-product relationship table, e.g., favorites)
        if ($request->favorite) {
            $user->favorites()->attach($product->id); // Add to user's favorite products
        } else {
            $user->favorites()->detach($product->id); // Remove from user's favorite products
        }

        return response()->json(['success' => true]);
    }
}