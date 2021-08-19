<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'ravi',
          'email' => 'admin@gmail.com',
          'phone' => '123456',
          'password' => bcrypt('123456'),
          'is_admin' => '1',
      ]);
    }
}
