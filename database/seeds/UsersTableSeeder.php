<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'Gilang Ramadan',
            'email' => 'mgrware@gmail.com',
            'role' => 'ADMINISTRATOR',
            'is_active' => true,
            'password' => bcrypt('gilang'),
        ]);
    }
}
