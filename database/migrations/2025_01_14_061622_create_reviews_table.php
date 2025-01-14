<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          // Define the ratings enum values
          $ratings_enum = [1, 2, 3, 4, 5];
        
          Schema::create('reviews', function (Blueprint $table) use ($ratings_enum) {
              $table->id();
              $table->foreignId('product_id')->constrained()->onDelete('cascade');
              $table->foreignId('user_id')->constrained()->onDelete('cascade');
              $table->enum('rating', $ratings_enum)->default(1); 
              $table->text('comment');
              $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
