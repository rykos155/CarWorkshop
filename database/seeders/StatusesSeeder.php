<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $status = [
            1 => 'Przyjęte',
            2 => 'Priorytet',
            3 => 'Wysłany kosztorys',
            4 => 'Anulowane',
            5 => 'Zakończone',
            6 => 'W oczekiwaniu na części',
            7 => 'W realizacji',
            8 => 'Inne',
            9 => 'W oczekiwaniu na decyzje klienta',
        ];

        foreach($status as $key => $wiersz)
            DB::table('statuses')->insert([
                'status'=>$wiersz
            ]);
    }
}
