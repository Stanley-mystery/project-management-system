<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; 

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'user_id',];


  // Relationship: A product belongs to a user
  public function user()
  {
      return $this->belongsTo(User::class);
  }

  // Relationship: A product can have many reviews
  public function reviews()
  {
      return $this->hasMany(Review::class);
  }


  public static function boot()
  {
      parent::boot();

      static::creating(function ($product) {
          if (empty($product->slug)) {
              $product->slug = Str::slug($product->name);
          }
      });
  }


  /**
 * Relationship between product and users who have favorited it.
 * A product can have many users who have favorited it.
 */
public function favoritedByUsers()
{
    return $this->belongsToMany(User::class, 'favorites');
}


     /**
     * Relationship: A category has many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
 
       // Define the 'category' relationship
       public function category()
       {
           return $this->belongsTo(Category::class);
       }

}
