<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->string('address');
            $table->string('genre');
            $table->text('image');
            $table->string('lat');
            $table->string('latitude');
            $table->string('long');
            $table->string('longitude');
            $table->string('name');
            $table->string('rating');
            $table->string('short_description');
            $table->string('type');
            $table->id();
            $table->timestamps();
            $table->string('rev');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('feature_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
