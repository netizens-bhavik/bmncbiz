<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            countries::class,
            roles::class,
            users::class,
            BlackListedDomains::class,
        ]);
        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->assignRole('user');
        });
        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->assignRole('subscriber');
        });
    }
}
