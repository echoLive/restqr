<?php

use App\VatType;
use Illuminate\Database\Seeder;

class VatTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vatList = [
            [
                'slug' => 'geral',
                'value' => 23,
            ],
            [
                'slug' => 'intermedia',
                'value' => 13,
            ],
            [
                'slug' => 'reduzida',
                'value' => 6,
            ],
            [
                'slug' => 'esenta',
                'value' => 0,
            ]
        ];

        VatType::unguard();

        foreach ($vatList as $vat){
            VatType::create($vat);
        }
        VatType::reguard();
    }
}
