<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    $faker = Factory::create();

        $name = [
            1 => 'Układ hamulcowy',
            2 => 'Układ zawieszenia',
            3 => 'Układ wydechowy',
            4 => 'Silnik',
            5 => 'Filtry',
            6 => 'Oleje i płyny',
            7 => 'Przeniesienie napędu',
            8 => 'Oświetlenie',
            9 => 'Elektryka i elektronika',
            10 => 'Karoseria',
            11 => 'Wnętrze',
            12 => 'Opony',
        ];

        foreach($name as $key => $wiersz)
            DB::table('categories')->insert([
                'name'=>$wiersz
            ]);
    }
}
