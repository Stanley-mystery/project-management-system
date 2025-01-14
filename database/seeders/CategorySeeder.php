<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { // Define categories in an array
        $categories = [
            'Electronics',
            'Clothing',
            'Home-Furniture',
            'Sports',
            'Toys',
            'Shoes',
            'Beauty & Health',
            'Automotive',
            'Pet Supplies',
            'Garden & Outdoors',
            'Jewelry & Watches',
            'Music & Instruments',
            'Office Supplies',
            'Arts & Crafts',
            'Baby Products',
            'Gifts & Gadgets',
            'Health & Fitness',
            'Technology',
            'Gaming',
            'Luxury',
            'Movies & TV',
            'Travel & Luggage',
            'Photography',
            'Digital Products',
            'Handmade',
            'Furniture',
            'Mobile Phones',
            'Virtual Reality',
        ];
    
        // Loop through each category and create it in the database
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
         // Create sample categories
     
    }
}
