<?php

use Illuminate\Database\Seeder;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cocktail')->insert([
            [
                'name' => 'Ti-Punch',
                'category' => 'Cocktail',
                'sub_cat' => 'Rhum Blanc',
                'id_steps' => '6',
                'picture' => '',
            ]
        ]);
    }
}
