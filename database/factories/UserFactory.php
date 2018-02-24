<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
 $factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password = '12341234';

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->freeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'location' => $faker->address,
        'Ip_address' => $faker->ipv4,
        'phone_num' => $faker->phoneNumber,
        'pirth_day' => $faker->dateTime($max = '2000-02-25 08:37:17'),
        'gender' =>    $faker->randomElement($array = array ('male','female')),
        'id_nashioty' => $faker->numberBetween($min = 1000000000, $max = 1900000000)  ,
        'status' =>    $faker->randomElement($array = array ('actev', 'blok','stopped')),
        'nashioty' => $faker->country ,
        'remember_token' => str_random(10),
    ];
});
