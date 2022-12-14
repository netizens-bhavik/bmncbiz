<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'management']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'team_member']);
        Role::create(['name' => 'subscriber']);
        Role::create(['name' => 'user']);
    }
}
