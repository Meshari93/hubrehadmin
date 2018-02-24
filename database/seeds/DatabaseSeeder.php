<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

            $users = factory(App\User::class, 10)->create();
     }
}
