<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('clients')->insert([

            'name' => 'Patryk',
            'surname' => "Rykowski",
            'pesel' => 98050506935,
            'phoneNumber' => 781413134,
            'email' => "patryk@gmail.com",
            'home' => "Bedziechow",
            //'street' => ,
            'houseNumber' => 12,
            //'flatNumber' => ,
            'zipCode' => "62-704",
            'commune' => "Kawęczyn",
            'province_id' => 9,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Michał',
            'surname' => "Kowalski",
            'pesel' => 98050506931,
            'phoneNumber' => 781413934,
            'email' => "patryk1@gmail.com",
            'home' => "Kalisz",
            'street' => "dluga",
            'houseNumber' => 12,
            'flatNumber' => 1,
            'zipCode' => "62-800",
            'commune' => "Kalisz",
            'province_id' => 5,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Jan',
            'surname' => "Michalik",
            'pesel' => 98050506930,
            'phoneNumber' => 781410134,
            'email' => "patryk0@gmail.com",
            'home' => "Turek",
            'street' => "Waska",
            'houseNumber' => 12,
            'flatNumber' => 6,
            'zipCode' => "62-700",
            'commune' => "Turek",
            'province_id' => 2,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Marcin',
            'surname' => "Marciniak",
            'pesel' => 88050506930,
            'phoneNumber' => 681410134,
            'email' => "marcinmarcin@gmail.com",
            'home' => "Turek",
            'street' => "Wiejska",
            'houseNumber' => 22,
            //'flatNumber' => 6,
            'zipCode' => "62-700",
            'commune' => "Turek",
            'province_id' => 2,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Andrzej',
            'surname' => "Konczak",
            'pesel' => 78050506932,
            'phoneNumber' => 781490134,
            'email' => "andrzej1@gmail.com",
            'home' => "Kaweczyn",
            // 'street' => "Waska",
            'houseNumber' => 7,
            //'flatNumber' => 6,
            'zipCode' => "62-704",
            'commune' => "Kaweczyn",
            'province_id' => 2,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Hubert',
            'surname' => "Maklowicz",
            'pesel' => 98050506932,
            'phoneNumber' => 781490139,
            'email' => "hubihubi@gmail.com",
            'home' => "Bedziechow",
            // 'street' => "Waska",
            'houseNumber' => 13,
            //'flatNumber' => 6,
            'zipCode' => "62-704",
            'commune' => "Kaweczyn",
            'province_id' => 2,
            'deactivate' => 0
        ]);

        DB::table('clients')->insert([

            'name' => 'Magda',
            'surname' => "Balcerzak",
            'pesel' => 78050506111,
            'phoneNumber' => 691110139,
            'email' => "madzia@gmail.com",
            'home' => "SKarżyn",
            // 'street' => "Waska",
            'houseNumber' => 51,
            //'flatNumber' => 6,
            'zipCode' => "62-704",
            'commune' => "Kaweczyn",
            'province_id' => 2,
            'deactivate' => 0
        ]);
    }
}
