<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('cleanliness')->default('0');
          $table->integer('place')->default('0');
          $table->integer('price')->default('0');
          $table->integer('accompany')->default('0');
          $table->integer('furniture')->default('0');
           $table->integer('user_id')->unsigned()->nullable();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('property_id')->unsigned()->nullable();
          $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
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
        Schema::dropIfExists('ratings');
    }
}
