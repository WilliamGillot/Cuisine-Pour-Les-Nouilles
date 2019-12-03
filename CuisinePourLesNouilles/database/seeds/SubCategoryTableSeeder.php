<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_cat')->insert([
              'name' => 'Végétarien',
              'name' => 'Sans Gluten',
              'name' => 'Vodka',
              'name' => 'Whisky',
              'name' => 'Rhum Blanc',
              'name' => 'Rhum Ambré',
              'name' => 'Gin',
              'name' => 'Jagermeister',
        ]);
    }
}