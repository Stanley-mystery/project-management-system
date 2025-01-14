<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $user = User::first(); 

         Product::create([
            'name' => 'Apple iPhone 14',  
            'slug' => 'apple-iphone-14',  
            'description' => 'The Apple iPhone 14 is the latest smartphone offering from Apple, featuring a stunning display, powerful A15 chip, and excellent camera performance.', 
            'price' => 799.99, 
            'old_price' => 899.99,
            'user_id' => $user->id, 
            'category_id' => 28,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23',  
            'slug' => 'samsung-galaxy-s23',  
            'description' => 'The Samsung Galaxy S23 offers exceptional performance with its Snapdragon 8 Gen 2 processor, great battery life, and an AMOLED display.', 
            'price' => 899.99, 
            'old_price' => 999.99,
            'user_id' => $user->id,  
            'category_id' => 28,
        ]);

        Product::create([
            'name' => 'Google Pixel 8',  
            'slug' => 'google-pixel-8',  
            'description' => 'The Google Pixel 8 offers an excellent camera, pure Android experience, and cutting-edge AI features for an exceptional mobile experience.', 
            'price' => 699.99, 
            'old_price' => 799.99,
            'user_id' => $user->id, 
            'category_id' => 28, 
        ]);
    }
}
