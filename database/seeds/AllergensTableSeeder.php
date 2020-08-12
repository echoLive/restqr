<?php

use App\Allergen;
use Illuminate\Database\Seeder;

class AllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergens = [
            [
                'icon' => 'fish',
            ],
            [
                'icon' => 'egg',
            ],
            [
                'icon' => 'crustacean',
            ],
            [
                'icon' => 'gluten',
            ],
            [
                'icon' => 'peanut',
            ],
            [
                'icon' => 'milk',
            ],
            [
                'icon' => 'tree-nuts',
            ],
            [
                'icon' => 'celery',
            ],
            [
                'icon' => 'mustard',
            ],
            [
                'icon' => 'shellfish',
            ],
            [
                'icon' => 'sesame',
            ],
            [
                'icon' => 'lupin',
            ],
            [
                'icon' => 'sulfites',
            ],
            [
                'icon' => 'corn',
            ],
            [
                'icon' => 'soybeans',
            ],
            [
                'icon' => 'mushroom',
            ]
        ];

        Allergen::unguard();

        foreach ($allergens as $allergen){
            Allergen::create($allergen);
        }
        Allergen::reguard();
    }
}
