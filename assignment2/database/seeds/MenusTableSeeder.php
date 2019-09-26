<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'Roast duck',
            'price' => '25',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'CHinese tea with rise',
            'price' => '1.5',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Scallion pancakes',
            'price' => '4.5',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Sreamed dumplings',
            'price' => '9.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Panfried dumplings',
            'price' => '9.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Small steamed pork buns(6)',
            'price' => '9.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Cucumber in minced garlic',
            'price' => '8.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Cold black fungi',
            'price' => '8.7',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Thousand eggs and bean curd',
            'price' => '',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Spicy dry bean curd',
            'price' => '10.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Special bean curd skin',
            'price' => '10.5',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Chinese tong cu ribs',
            'price' => '11',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Beef and tripe w spicy sauce',
            'price' => '14',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Nanjing salty duck',
            'price' => '15.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Vegetable soup',
            'price' => '9.9',
            'resta_id' => 1,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'milk tea',
            'price' => '8.5',
            'resta_id' => 2,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Apple tea',
            'price' => '30',
            'resta_id' => 2,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'French fries',
            'price' => '10',
            'resta_id' => 3,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('menus')->insert([
            'name' => 'Salad',
            'price' => '25',
            'resta_id' => 3,
            'image' => '',
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
