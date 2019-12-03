<?php

use Illuminate\Database\Seeder;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe')->insert([
            [
                'name' => 'Fondant au chocolat',
                'id_category' => '4',
                'sub_cat' => '1',
                'nb_part' => '6',
                'id_steps' => '1',
            ],
            [
                'name' => 'Tarte Alsacienne',
                'category' => 'Dessert',
                'sub_cat' => '1',
                'nb_part' => '6',
                'id_steps' => '2',
            ],
            [
                'name' => 'Blinis de pommes de terre',
                'category' => 'Apéritif',
                'sub_cat' => '1',
                'sub_cat' => '2',
                'nb_part' => '6',
                'id_steps'=> '3',
            ],
            [
                'name' => 'Poulet bang-bang',
                'category' => 'Plat',
                'sub_cat' => '2',
                'nb_part' => '6',
                'id_steps' => '4',
            ],
            [
                'name' => 'Poisson kiwi',
                'category' => 'Plat',
                'sub_cat' => '2',
                'nb_part' => '6',
                'id_steps' => '5',
            ],
            [
                'name' => 'Carpaccio de boeuf',
                'category' => 'Entrée',
                'sub_cat' => '2',
                'nb_part' => '6',
                'id_steps' => '6',
            ],
            [
                'name' => 'Tsatsiki',
                'category' => 'Apéritif',
                'sub_cat' => '1',
                'sub_cat' => '2',
                'nb_part' => '6',
                'id_steps' => '7',
            ]
        ]);
    }
}
