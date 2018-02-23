<?php

use Faker\Generator as Faker;

$factory->define (App\Spatie\Permission\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'guard_name'=>$faker->web,
        'created_at'=>$faker->2017-12-18 02:07:36
        'updated_at'=>$faker->2017-12-18 02:07:36
    ];
});
