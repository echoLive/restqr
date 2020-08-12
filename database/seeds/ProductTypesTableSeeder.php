<?php

use App\ProductType;
use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productTypes = [
            [
                'slug' => 'simples',
            ],
            [
                'slug' => 'composto',
            ],
            [
                'slug' => 'acompanhamento',
            ],
            [
                'slug' => 'complementar',
            ]
        ];

        ProductType::unguard();

        foreach ($productTypes as $productType){
            ProductType::create($productType);
        }
        ProductType::reguard();
    }
}
