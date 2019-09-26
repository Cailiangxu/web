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
            'name' => 'Wang',
            'email' => 'wang@gmail.com',
            'password' => bcrypt('1234'),
            'status' => 'Resta',
            'address' => 'Marla St'
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'password' => bcrypt('1234'),
            'status' => 'Resta',
            'address' => 'Joplin St'
        ]);
        DB::table('users')->insert([
            'name' => 'Nick',
            'email' => 'nick@gmail.com',
            'password' => bcrypt('1234'),
            'status' => 'Cons',
            'address' => 'cornell St'
        ]);
        DB::table('users')->insert([
            'name' => 'lisa',
            'email' => 'lisa@gmail.com',
            'password' => bcrypt('1234'),
            'status' => 'Cons',
            'address' => 'stanford St'
        ]);
    }
}
