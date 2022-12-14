<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class users extends Seeder
{
    public $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //get random country id
        User::create([
            'name' => 'NetContent Management',
            'email' => 'management@netcontent.biz',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country_id' => 104,
        ])->assignRole('management');

        User::create([
            'name' => 'NetContent Admin',
            'email' => 'admin@netcontent.biz',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country_id' => 104,
        ])->assignRole('admin');

        User::create([
            'name' => 'NetContent Team Member',
            'email' => 'team-member@netcontent.biz',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country_id' => 104,
        ])->assignRole('team_member');

        User::create([
            'name' => 'NetContent Subscriber',
            'email' => 'subscriber@netcontent.biz',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country_id' => 104,
        ])->assignRole('subscriber');

        User::create([
            'name' => 'NetContent User',
            'email' => 'user@netcontent.biz',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'country_id' => 104,
        ])->assignRole('user');

    }
}
