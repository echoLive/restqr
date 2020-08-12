<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'owner',
            'manager',
            'worker',
            'client',
        ];


        Role::unguard();

        foreach ($roles as $role) {
            Role::create([
                'role' => $role
            ]);
        }

        Role::reguard();
    }
}
