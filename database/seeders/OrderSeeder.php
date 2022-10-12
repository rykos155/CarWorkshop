<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 15; $i++) {
            DB::table('orders')->insert([
                'car_id' => rand(1,7),
                'status_id' => rand(1,2),
                'user_id' => rand(1,6),
                'startDate' => $faker->dateTimeBetween('now', '+07 days'),
                'endDate' => $faker->dateTimeBetween('+07 days', '+08 days'),
                'description' => "Problemy z samochodem",
            ]);
        }
    }
}
