<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $provinceName = [
            1 => 'Dolnośląskie',
            2 => 'Kujawsko-pomorskie',
            3 => 'Lubelskie',
            4 => 'Lubuskie',
            5 => 'Łódzkie',
            6 => 'Małopolskie',
            7 => 'Mazowieckie',
            8 => 'Opolskie',
            9 => 'Podkarpackie',
            10 => 'Podlaskie',
            11 => 'Pomorskie',
            12 => 'Śląskie',
            13 => 'Świętokrzyskie',
            14 => 'Warmińsko-mazurskie',
            15 => 'Wielkopolskie',
            16 => 'Zachodniopomorskie',
        ];

        foreach($provinceName as $key => $wiersz)
            DB::table('provinces')->insert([
                'provinceName'=>$wiersz
            ]);
    }
}
