<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // Relationship between user and role
    public function role(){
        return $this->belongsTo(Role::class);
    }


      /**
     * Relationship between user and reviews
     * A user can have many reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

 /**
 * Relationship between user and favorite products
 * A user can have many favorite products.
 */
public function favoriteProducts()
{
    return $this->belongsToMany(Product::class, 'favorites');
}


}
