<?php

use App\UserInfo;
use Illuminate\Database\Seeder;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserInfo::unguard();

        UserInfo::create([
            'user_id' => 1,
            'name' => 'admin',
        ]);

        UserInfo::create([
            'user_id' => 2,
            'name' => 'owner',
        ]);

        UserInfo::create([
            'user_id' => 3,
            'name' => 'manager',
        ]);

        UserInfo::create([
            'user_id' => 4,
            'name' => 'worker',
        ]);

        UserInfo::create([
            'user_id' => 5,
            'name' => 'client',
        ]);

        UserInfo::reguard();
    }
}
