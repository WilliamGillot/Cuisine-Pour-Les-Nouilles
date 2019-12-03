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
        DB::table('steps')->insert([
            'steps' => 'Faire fondre 100g de beurre et 200g de chocolat.\n Ajouter 6 jaunes d\'oeufs, 75g de sucre et 100g de farine.\n Incorporer 6 blancs d\'oeufs montés en neige.\n Cuire 20min à 180°C.',
            'steps' => 'Mélanger 1 jaune d\'oeuf à 2 oeufs et 50g de sucre.\n Ajouter 200g de lait, 100g de crème liquide et 1 gousse de vanille.\n Couper et agencer 2 poires et 1 pomme sur un fond de pâte a tarte feuilletée.\n Verser le mélange sur les fruits.\n Cuire 45min à 200°C.',
            'steps' => 'Ecraser 500g de pommes de terre.\n Ajouter 4 jaunes d\'oeufs, du sel et du poivre.\n Incorporer 4 blancs montés en neige.\n Cuire chaque face 2 min sur une poêle huilée.',
            'steps' => 'Cuire pendant 10min, dans une eau frémissante, 250g de poulet, 3 tranches de gingembre frais et 1 cube bouillon.\n Dresser, dans une assiette, 5 feuilles de salade, 1/4 de concombre, 1/4 de carotte.\n Préparer une sauce avec 3 cuillières à soupe d\'huile piquante, 1 de soja salé, 1 d\'huile de noix, 1 de vinaigre de riz, 1 de soja sucré, du sel, du poivre et 50g de cacahuètes concassées.\n Ajouter le poulet puis la sauce sur le dressage dans l\'assiette',
            'steps' => 'Couper en dés 2 filets de dorade, 150g de crevettes et 1 avocat.\n Ajouter du jus de citron vert, 8 minis kiwi nergi, 4 grappes de groseilles et de la ciboulette.\n Laisser mariner le tout 30min.\n Servir en ajoutant 1 cuillière à soupe d\'huile d\'olive',
            'steps' => 'Congeler 800g de boeuf puis couper très finement (à la mandoline) avant de le disposer dans l\'assiette.\n Couper en dés 400g de pommes granny smith, 200g de celeri-branche, 300g de comté et 1 botte de coriandre fraîche.\n Ajouter du jus de citron vert, de l\'huile d\'olive, du sel et du poivre.\n Disposer le mélange sur la viande.',
            'Steps' => 'Mélanger 250g de yaourt à la grec, 1/2 concombre finement haché, 1/2 botte de ciboulette, 1 citron vert, du sel et du poivre.\n Rajouter si besoin du piment et du gingembre.',
            'stpes' => 'Mélanger 70cl de rhum blanc, 1L de jus de goyave, 1L de jus de maracudja, 1L de multifruits, 1 verre de grenadine, 2 gousses de vanille, 4 cuillières à soupe de sucre.',
        ]);
    }
}
