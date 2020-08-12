<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserInfosTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(AllergensTableSeeder::class);
        $this->call(AllergenLangsTableSeeder::class);
        $this->call(ProductMeasureTypesTableSeeder::class);
        $this->call(ProductTypesTableSeeder::class);
        $this->call(VatTypesTableSeeder::class);
        $this->call(SocialNetworksTableSeeder::class);
    }
}
