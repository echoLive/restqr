<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'name' => 'pt',
                'is_installed' => true,
                'is_active' => true,
            ],
            [
                'name' => 'en',
                'is_installed' => true,
                'is_active' => false,
            ]
        ];

        Language::unguard();

        foreach ($languages as $language){
            Language::create($language);
        }
        Language::reguard();
    }
}
