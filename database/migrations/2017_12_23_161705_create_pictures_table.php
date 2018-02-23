<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->string('picture3')->nullable();
            $table->string('picture4')->nullable();
            $table->string('picture5')->nullable();
            $table->string('picture6')->nullable();
            $table->string('picture7')->nullable();
            $table->string('picture8')->nullable();
            $table->string('picture9')->nullable();
            $table->string('picture10')->nullable();
            $table->string('picture11')->nullable();
            $table->string('picture12')->nullable();
            $table->string('picture13')->nullable();
            $table->string('picture14')->nullable();
            $table->string('picture15')->nullable();
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
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
        Schema::dropIfExists('pictures');
    }
}
