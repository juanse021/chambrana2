<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'santa',
        'email' => 'santa@chambrana.com',
        'password' => bcrypt('chambrana'),
        'role' => 'admin'
      ]);
    }
}
