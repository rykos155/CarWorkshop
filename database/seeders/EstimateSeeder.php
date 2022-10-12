<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class EstimateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 40; $i++) {
            DB::table('estimates')->insert([

                'order_id' => rand(1,15),
                'user_id' => rand(1,6),
                'isSend' => false
            ]);
        }   
    }
}
