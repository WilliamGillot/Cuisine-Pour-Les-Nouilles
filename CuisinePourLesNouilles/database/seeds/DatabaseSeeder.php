<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(
            UsersTableSeeder::class
        );

        $this->call(
            CategoryTableSeeder::class
        );

        $this->call(
            CocktailTableSeeder::class
        );

        $this->call(
            IngredientsTableSeeder::class
        );

        $this->call(
            RecipeTableSeeder::class
        );

        $this->call(
            StepTableSeeder::class
        );

        $this->call(
            SubCategoryTableSeeder::class
        );
    }
}