<?php

use App\SocialNetwork;
use Illuminate\Database\Seeder;

class SocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialNetworks = [
            [
                'name' => 'Facebook',
                'slug' => 'facebook',
                'icon' => 'facebook',
            ],
            [
                'name' => 'Google',
                'slug' => 'google',
                'icon' => 'google',
            ],
            [
                'name' => 'Twitter',
                'slug' => 'twitter',
                'icon' => 'twitter',
            ],
        ];

        SocialNetwork::unguard();

        foreach ($socialNetworks as $social){
            SocialNetwork::create($social);
        }
        SocialNetwork::reguard();
    }
}
