<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $products = Product::all();
         $users = User::all();
 
        
         foreach ($products as $product) {
            
             $user = $users->random();
 
            
             Review::create([
                 'product_id' => $product->id,
                 'user_id' => $user->id,
                 'rating' => rand(1, 5),  
                 'comment' => 'This is a review for the product ' . $product->name,
             ]);
         }
    }
}
