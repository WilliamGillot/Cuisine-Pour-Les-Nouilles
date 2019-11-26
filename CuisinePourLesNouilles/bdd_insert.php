<?php

class TableSeeder extends Seeder {

  public function run() {
    DB::table('users')->insert(
      array('name' => '', 'email' => '', 'password' => '')
    );
    DB::table('category')->insert(
      array(
        array('name' => 'Apéritif'),
        array('name' => 'Entrée'),
        array('name' => 'Plat'),
        array('name' => 'Dessert'),
        array('name' => 'Cocktail')
      )
    );
    DB::table('sub_cat')->insert(
      array(
        array('name' => 'Vegan'),
        array('name' => 'Sans Gluten'),
        array('name' => 'Vodka'),
        array('name' => 'Whisky'),
        array('name' => 'Rhum Blanc'),
        array('name' => 'Rhum Ambré'),
        array('name' => 'Gin'),
        array('name' => 'Jagermeister')
      )
    );
    DB::table('steps')->insert(
      array(
        array('steps' => 'Faire fondre 100g de beurre et 200g de chocolat.\n Ajouter 6 jaunes d\'oeufs, 75g de sucre et 100g de farine.\n Incorporer 6 blancs d\'oeufs montés en neige.\n Cuire 20min à 180°C.'),
        array('steps' => 'Mélanger 1 jaune d\'oeuf à 2 oeufs et 50g de sucre.\n Ajouter 200g de lait, 100g de crème liquide et 1 gousse de vanille.\n Couper et agencer 2 poires et 1 pomme sur un fond de pâte a tarte feuilletée.\n Verser le mélange sur les fruits.\n Cuire 45min à 200°C.'),
        array('steps' => 'Ecraser 500g de pommes de terre.\n Ajouter 4 jaunes d\'oeufs, du sel et du poivre.\n Incorporer 4 blancs montés en neige.\n Cuire chaque face 2 min sur une poêle huilée.'),
        array('steps' => 'Cuire pendant 10min, dans une eau frémissante, 250g de poulet, 3 tranches de gingembre frais et 1 cube bouillon.\n Dresser, dans une assiette, 5 feuilles de salade, 1/4 de concombre, 1/4 de carotte.\n Préparer une sauce avec 3 cuillières à soupe d\'huile piquante, 1 de soja salé, 1 d\'huile de noix, 1 de vinaigre de riz, 1 de soja sucré, du sel, du poivre et 50g de cacahuètes concassées.\n Ajouter le poulet puis la sauce sur le dressage dans l\'assiette'),
        array('steps' => 'Couper en dés 2 filets de dorade, 150g de crevettes et 1 avocat.\n Ajouter du jus de citron vert, 8 minis kiwi nergi, 4 grappes de groseilles et de la ciboulette.\n Laisser mariner le tout 30min.\n Servir en ajoutant 1 cuillière à soupe d\'huile d\'olive'),
        array('steps' => 'Congeler 800g de boeuf puis couper très finement (à la mandoline) avant de le disposer dans l\'assiette.\n Couper en dés 400g de pommes granny smith, 200g de celeri-branche, 300g de comté et 1 botte de coriandre fraîche.\n Ajouter du jus de citron vert, de l\'huile d\'olive, du sel et du poivre.\n Disposer le mélange sur la viande.'),
        array('Steps' => 'Mélanger 250g de yaourt à la grec, 1/2 concombre finement haché, 1/2 botte de ciboulette, 1 citron vert, du sel et du poivre.\n Rajouter si besoin du piment et du gingembre.'),
        array('stpes' => 'Mélanger 70cl de rhum blanc, 1L de jus de goyave, 1L de jus de maracudja, 1L de multifruits, 1 verre de grenadine, 2 gousses de vanille, 4 cuillières à soupe de sucre.')
      )
    );
    DB::table('ingredients')->insert(
      array(
        array('name' => 'sel'),
        array('name' => 'poivre'),
        array('name' => 'huile d\'olive'),
        array('name' => 'huile de riz'),
        array('name' => 'oeuf'),
        array('name' => 'jaune d\'oeuf'),
        array('name' => 'beurre doux'),
        array('name' => 'chocolat'),
        array('name' => 'sucre'),
        array('name' => 'farine'),
        array('name' => 'blanc d\'oeufs'),
        array('name' => 'pâte feuilletée'),
        array('name' => 'lait'),
        array('name' => 'crème liquide'),
        array('name' => 'gousse de vanille'),
        array('name' => 'poire'),
        array('name' => 'pomme'),
        array('name' => 'pomme de terre'),
        array('name' => 'poulet'),
        array('name' => 'gingembre fraîs'),
        array('name' => 'gingembre'),
        array('name' => 'cube bouillon'),
        array('name' => 'salade'),
        array('name' => 'concombre'),
        array('name' => 'carotte'),
        array('name' => 'huile piquante'),
        array('name' => 'sauce soja salé'),
        array('name' => 'sauce soja sucré'),
        array('name' => 'huile de noix'),
        array('name' => 'vinaigre de riz'),
        array('name' => 'cacahuète'),
        array('name' => 'lait'),
        array('name' => 'dorade'),
        array('name' => 'crevette'),
        array('name' => 'avocat'),
        array('name' => 'citron vert'),
        array('name' => 'kiwi nergi'),
        array('name' => 'groseille'),
        array('name' => 'ciboulettes'),
        array('name' => 'boeuf'),
        array('name' => 'pomme granny smith'),
        array('name' => 'celeri-branche'),
        array('name' => 'coriandre'),
        array('name' => 'comté'),
        array('name' => 'yaourt à la grec'),
        array('name' => 'piment'),
        array('name' => 'rhum blanc'),
        array('name' => 'jus de goyave'),
        array('name' => 'jus maracudja'),
        array('name' => 'jus multifruits'),
        array('name' => 'grenadine')
      )
    );
    DB::table('recipe')->insert(
      array(
        array('name' => 'Fondant au chocolat',
              'category' => 'Dessert',
              'sub_cat' => '',
              'nb_part' => '6',
              'idsteps'),
        array('name' => 'Tarte Alsacienne'),
        array('name' => 'Blinis de pommes de terre'),
        array('name' => 'Poulet bang-bang'),
        array('name' => 'Poisson kiwi'),
        array('name' => 'Carpaccio de boeuf'),
        array('name' => 'Tsatsiki')
      )
    );
    DB::table('cocktail')->insert(
      array(
        array('name' => 'Ti-Punch'),
      )
    );
  }
}
?>