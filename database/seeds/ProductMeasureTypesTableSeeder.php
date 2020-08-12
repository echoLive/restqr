<?php

use App\ProductMeasureType;
use Illuminate\Database\Seeder;

class ProductMeasureTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measures = [
            [
                'slug' => 'l',
            ],
            [
                'slug' => 'dl',
            ],
            [
                'slug' => 'cl',
            ],
            [
                'slug' => 'kg',
            ],
            [
                'slug' => 'g',
            ],
            [
                'slug' => 'units',
            ],
            [
                'slug' => 'pax',
            ],
        ];

        ProductMeasureType::unguard();

        foreach ($measures as $measure){
            ProductMeasureType::create($measure);
        }
        ProductMeasureType::reguard();
    }
}
