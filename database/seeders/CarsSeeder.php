<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "II",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "PTU180FFG",
            'VIN' => "WVWZZZ1HZWD071010",
            'color' => "czarny",
            'type' => "sedan",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "III",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "POS180FFG",
            'VIN' => "XXWZZZ1HZWD071010",
            'color' => "czarny",
            'type' => "sedan",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "I",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "PTUA12FFG",
            'VIN' => "CCCCZZ1HZWD071010",
            'color' => "czarny",
            'type' => "hatchback",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "II",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "PKA180FFG",
            'VIN' => "AVWZZZ1HZWD0AA010",
            'color' => "srebrny",
            'type' => "sedan",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "II",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "PK180FFG",
            'VIN' => "AAWZCZ1HZWD071010",
            'color' => "czarny",
            'type' => "sedan",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "II",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "PTUA99FFG",
            'VIN' => "BBWZCZ1H1WD071010",
            'color' => "czerwony",
            'type' => "coupe",
            'engineType' => "diesel",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);

        DB::table('cars')->insert([
            'client_id' => rand(1,5),
            'brand_id' => rand(1,90),
            'model_id' => rand(1,800),
            'generation' => "II",
            'productionYear' => rand(1980,2021),
            'registrationNumber' => "POSA99FFG",
            'VIN' => "CC1ZCZ1HZWD071019",
            'color' => "czarny",
            'type' => "sedan",
            'engineType' => "benzyna",
            'engineCapacity' => rand(1,4),
            'enginePower' => rand(75,300),
            'mileage' => rand(60000,400000)
        ]);
    }
}
