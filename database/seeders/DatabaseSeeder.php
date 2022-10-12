<?php

namespace Database\Seeders;

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
        $this->call([   
            RolesAndPermissionsSeeder::class,
            UsersSeeder::class,
            ProvincesSeeder::class,
            ClientsSeeder::class, 
            StatusesSeeder::class,
            CategoriesSeeder::class,
            BrandsSeeder::class,
            CarModelsSeeder::class,
            CarsSeeder::class,
            OrderSeeder::class,
            EstimateSeeder::class,
        ]);
    }
}
