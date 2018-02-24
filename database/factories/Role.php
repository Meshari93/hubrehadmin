<?php

use Faker\Generator as Faker;

$factory->define (App\Spatie\Permission\Models\Role::class, function (Faker $faker) {
  static $created = '2018-02-24 15:30:18';
  static $updated = '2018-02-24 15:30:18';

    return [
         'name' => $faker->name,
        'guard_name'=>$faker->web,
        'created_at'=>$faker ?: $created_at,
        'updated_at'=>$faker ?: $updated_at,
    ];
});
