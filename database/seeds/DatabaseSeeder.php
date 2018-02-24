<?php

use Illuminate\Database\Seeder;
use Faker\Generator  ;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Faker\Generator $faker
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
          'id' => '1',
          'first_name' => 'Meshari',
          'last_name' => 'Jabbar',
          'email' => 'almeshari93@gmail.com',
          'password' => '$2y$10$vxo0xuxGT/USAk2bpx0puOEhT4uKoeRv5qK23J1Hple2CMob/0B1C',
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
            'created_at' => '2017-12-18 02:07:36',
            'updated_at' => '2017-12-18 02:07:36',
            ]);


        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_id' => '1',
            'model_type' => 'App\User',
            ]);

            for ($i=0; $i < 5; $i++) {
              DB::table('users')->insert([
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
                  ]);
            }


            // $users = factory(App\User::class, 10000)->create();
     }
}
