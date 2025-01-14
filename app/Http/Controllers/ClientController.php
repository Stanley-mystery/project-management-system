<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
    |--------------------------------------------------------------------------
    | Project Manager Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles actions related to the Project Manager's functionalities in the
    | application. It is responsible for displaying the project manager dashboard and 
    | potentially other project manager-related actions, such as managing projects, assigning tasks, etc.
    |
    */

class ClientController extends Controller
{
   
    protected $productService;

    // Inject the ProductService into the controller
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    


    /**
     * Display the project manager dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $products = $this->productService->getProductsWithReviewsAndCategory();
    
        $favoriteProductIds = $this->productService->getFavoriteProduct();
    
        // Pass the products and favorite product IDs to the view
        return view('client.dashboard', compact('products', 'favoriteProductIds'));
    }

     
}
