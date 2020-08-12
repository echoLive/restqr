<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();

        User::create([
            'email' => 'admin@restqr.menu',
            'password' => bcrypt('strong#answer#'),
            'role_id' => 1,
        ]);

        User::create([
            'email' => 'owner@restqr.menu',
            'password' => bcrypt('strong#answer#'),
            'role_id' => 2,
        ]);

        User::create([
            'email' => 'manager@restqr.menu',
            'password' => bcrypt('strong#answer#'),
            'role_id' => 3,
        ]);

        User::create([
            'email' => 'worker@restqr.menu',
            'password' => bcrypt('strong#answer#'),
            'role_id' => 4,
        ]);

        User::create([
            'email' => 'client@restqr.menu',
            'password' => bcrypt('strong#answer#'),
            'role_id' => 5,
        ]);

        User::reguard();
    }
}
