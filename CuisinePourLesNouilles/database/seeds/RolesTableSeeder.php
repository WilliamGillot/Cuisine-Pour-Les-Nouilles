<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //création de role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'contributeur']);
        Role::create(['name' => 'libre']);
    }

}