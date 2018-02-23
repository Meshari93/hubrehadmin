<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('location')->nullable();
            $table->ipAddress('Ip_address')->nullable();
            $table->string('phone_num')->nullable();
            $table->date('pirth_day')->nullable();
            $table->string('id_nashioty')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('Status', ['stopped', 'wae', 'wap',])->nullable();
            $table->string('nashioty')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
