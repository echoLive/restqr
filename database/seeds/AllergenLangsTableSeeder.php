<?php

use App\AllergenLang;
use Illuminate\Database\Seeder;

class AllergenLangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergenLangs = [
            [
                'allergen_id' => 1,
                'lang_id' => 1,
                'name' => 'Peixe',
            ],
            [
                'allergen_id' => 2,
                'lang_id' => 1,
                'name' => 'Ovo',
            ],
            [
                'allergen_id' => 3,
                'lang_id' => 1,
                'name' => 'Crustáceo',
            ],
            [
                'allergen_id' => 4,
                'lang_id' => 1,
                'name' => 'Glutén',
            ],
            [
                'allergen_id' => 5,
                'lang_id' => 1,
                'name' => 'Amendoin',
            ],
            [
                'allergen_id' => 6,
                'lang_id' => 1,
                'name' => 'leite',
            ],
            [
                'allergen_id' => 7,
                'lang_id' => 1,
                'name' => 'Nozes',
            ],
            [
                'allergen_id' => 8,
                'lang_id' => 1,
                'name' => 'Aipo',
            ],
            [
                'allergen_id' => 9,
                'lang_id' => 1,
                'name' => 'Mostarda',
            ],
            [
                'allergen_id' => 10,
                'lang_id' => 1,
                'name' => 'Moluscos',
            ],
            [
                'allergen_id' => 11,
                'lang_id' => 1,
                'name' => 'Sesamo',
            ],
            [
                'allergen_id' => 12,
                'lang_id' => 1,
                'name' => 'Tremoço',
            ],
            [
                'allergen_id' => 13,
                'lang_id' => 1,
                'name' => 'Sulfitos',
            ],
            [
                'allergen_id' => 14,
                'lang_id' => 1,
                'name' => 'Milho',
            ],
            [
                'allergen_id' => 15,
                'lang_id' => 1,
                'name' => 'Soja',
            ],
            [
                'allergen_id' => 16,
                'lang_id' => 1,
                'name' => 'Cogumelos',
            ],
            [
                'allergen_id' => 1,
                'lang_id' => 2,
                'name' => 'Fish',
            ],
            [
                'allergen_id' => 2,
                'lang_id' => 2,
                'name' => 'Egg',
            ],
            [
                'allergen_id' => 3,
                'lang_id' => 2,
                'name' => 'Crustacean',
            ],
            [
                'allergen_id' => 4,
                'lang_id' => 2,
                'name' => 'Gluten',
            ],
            [
                'allergen_id' => 5,
                'lang_id' => 2,
                'name' => 'Peanut',
            ],
            [
                'allergen_id' => 6,
                'lang_id' => 2,
                'name' => 'Milk',
            ],
            [
                'allergen_id' => 7,
                'lang_id' => 2,
                'name' => 'Tree Nuts',
            ],
            [
                'allergen_id' => 8,
                'lang_id' => 2,
                'name' => 'Celery',
            ],
            [
                'allergen_id' => 9,
                'lang_id' => 2,
                'name' => 'Mustard',
            ],
            [
                'allergen_id' => 10,
                'lang_id' => 2,
                'name' => 'Shellfish',
            ],
            [
                'allergen_id' => 11,
                'lang_id' => 2,
                'name' => 'Sesamee',
            ],
            [
                'allergen_id' => 12,
                'lang_id' => 2,
                'name' => 'Lupin',
            ],
            [
                'allergen_id' => 13,
                'lang_id' => 2,
                'name' => 'Sulfites',
            ],
            [
                'allergen_id' => 14,
                'lang_id' => 2,
                'name' => 'Corn',
            ],
            [
                'allergen_id' => 15,
                'lang_id' => 2,
                'name' => 'Soybeans',
            ],
            [
                'allergen_id' => 16,
                'lang_id' => 2,
                'name' => 'Mushroom',
            ]
        ];

        AllergenLang::unguard();

        foreach ($allergenLangs as $language){
            AllergenLang::create($language);
        }
        AllergenLang::reguard();
    }
}
