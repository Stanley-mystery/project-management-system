<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


     // Mass assignable fields
     protected $fillable = ['product_id', 'user_id', 'rating', 'comment'];

     // Relationship: A review belongs to a product
     public function product()
     {
         return $this->belongsTo(Product::class);
     }
 
     // Relationship: A review belongs to a user
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
