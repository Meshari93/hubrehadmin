<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->integer('phon_num_one')->nullable();
            $table->integer('phon_num_two')->nullable();
            $table->integer('poryorty')->nullable();
            $table->time('time_entry')->nullable();
            $table->time('time_out')->nullable();
            $table->string('picture_home')->nullable();
            $table->string('status')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('num_rating')->nullable();
            $table->text('describstion')->nullable();
            $table->integer('num_section')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
