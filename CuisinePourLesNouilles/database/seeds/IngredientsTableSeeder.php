<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'sel',
            'name' => 'poivre',
            'name' => 'huile d\'olive',
            'name' => 'huile de riz',
            'name' => 'oeuf',
            'name' => 'jaune d\'oeuf',
            'name' => 'beurre doux',
            'name' => 'chocolat',
            'name' => 'sucre',
            'name' => 'farine',
            'name' => 'blanc d\'oeufs',
            'name' => 'pâte feuilletée',
            'name' => 'lait',
            'name' => 'crème liquide',
            'name' => 'gousse de vanille',
            'name' => 'poire',
            'name' => 'pomme',
            'name' => 'pomme de terre',
            'name' => 'poulet',
            'name' => 'gingembre fraîs',
            'name' => 'gingembre',
            'name' => 'cube bouillon',
            'name' => 'salade',
            'name' => 'concombre',
            'name' => 'carotte',
            'name' => 'huile piquante',
            'name' => 'sauce soja salé',
            'name' => 'sauce soja sucré',
            'name' => 'huile de noix',
            'name' => 'vinaigre de riz',
            'name' => 'cacahuète',
            'name' => 'lait',
            'name' => 'dorade',
            'name' => 'crevette',
            'name' => 'avocat',
            'name' => 'citron vert',
            'name' => 'kiwi nergi',
            'name' => 'groseille',
            'name' => 'ciboulettes',
            'name' => 'boeuf',
            'name' => 'pomme granny smith',
            'name' => 'celeri-branche',
            'name' => 'coriandre',
            'name' => 'comté',
            'name' => 'yaourt à la grec',
            'name' => 'piment',
            'name' => 'rhum blanc',
            'name' => 'jus de goyave',
            'name' => 'jus maracudja',
            'name' => 'jus multifruits',
            'name' => 'grenadine',
        ]);
    }
}
