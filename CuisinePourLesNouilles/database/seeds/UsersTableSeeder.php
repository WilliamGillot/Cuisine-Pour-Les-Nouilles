<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each (function ($user) {
            $user->assignRole('admin');
        });

        factory(App\User::class, 50)->create()->each (function ($user) {
            $user->assignRole('contributeur');
        });

        factory(App\User::class, 100)->create()->each (function ($user) {
            $user->assignRole('libre');
        });
    }
}