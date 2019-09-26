<?php

use Illuminate\Database\Seeder;

class RestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restas')->insert([
            'name' => 'Jack Chinese food',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'Chat time',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'French food',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'Tea a little',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'KFC',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'Yogmi',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'Ren japanese restaurant',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('restas')->insert([
            'name' => 'Momo chicken',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
