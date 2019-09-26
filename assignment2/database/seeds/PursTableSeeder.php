<?php

use Illuminate\Database\Seeder;

class PursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purs')->insert([
            'users_id' => 'test users_id',
            'menu_id' => 'test menu_id',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
