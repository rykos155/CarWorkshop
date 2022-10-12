<?php

namespace Database\Seeders;

use Faker\Factory;
use DB;
use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('carmodels')->insert([
            'model' => '124',
            'brand_id' => 1,
        ]);

        DB::table('carmodels')->insert([
            'model' => '500',
            'brand_id' => 1,
        ]);

        DB::table('carmodels')->insert([
            'model' => '595',
            'brand_id' => 1,
        ]);

        DB::table('carmodels')->insert([
            'model' => '695',
            'brand_id' => 1,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grande Punto',
            'brand_id' => 1,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CL',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Integra',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Legend',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MDX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NSX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RDX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RL',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RSX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TL',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TSX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vigor',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ZDX',
            'brand_id' => 2,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A721',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A741',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A751',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'City',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crossline',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crossover',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GTO',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadline',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scouty',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scouty R',
            'brand_id' => 3,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4C',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '33',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '75',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '90',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '145',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '146',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '147',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '155',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '156',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '159',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '164',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => '166',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alfasud',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alfetta',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Brera',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crosswagon',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Giulia',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Giulietta',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GT',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GTV',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mito',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spider',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sportwagon',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sprint',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stelvio',
            'brand_id' => 4,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A110',
            'brand_id' => 5,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bulldog',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cygnet',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB1',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB2',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB4',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB5',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB7',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB9',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB11',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DB Mk III',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DBS',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DBS Superleggera',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DBX',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lagonda',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'One-77',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rapide',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V8',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V8 Vantage',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V8 Zagato',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V12 Vanquish',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V12 Vantage',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vanquish',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vantage',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Virage',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Volatne',
            'brand_id' => 6,
        ]);

        DB::table('carmodels')->insert([
            'model' => '80',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => '90',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => '100',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => '200',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A1',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A2',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A3',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A4',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A4 Allroad',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A5',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A6',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A6 Allroad',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A7',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'A8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cabriolet',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'e-tron',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q2',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q3',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q4',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q4 Sportback',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q5',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q7',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Quattro',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'R8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rs2',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([

            'model' => 'RS3',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS4',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS5',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS6',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([

            'model' => 'RS7',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS Q3',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RS Q8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S1',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S2',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S3',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S4',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S5',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S6',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S7',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SQ2',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SQ5',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SQ7',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SQ8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TT',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TT RS',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TT S',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V8',
            'brand_id' => 7,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Allegro',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ambasador',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Healey',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Maxi',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Metro',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mini',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montego',
            'brand_id' => 8,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arnage',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Azure',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bentayga',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Brooklands',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Continental Flying Spur',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Continental GT',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Eight',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mulsanne',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Turbo R',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Turbo RT',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Turbo S',
            'brand_id' => 9,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1M',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3GT',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => '5GT',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => '6GT',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i4',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i8',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'iX',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'iX3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M2',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M4',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M5',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M6',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M8',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 1',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 2',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 4',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 5',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 6',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 7',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 8',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X1',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X2',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X3 M',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X4',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X5',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X5 M',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X6',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X6 M',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X7',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Z1',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Z3',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Z4',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Z4 M',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Z8',
            'brand_id' => 10,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chiron',
            'brand_id' => 11,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Divo',
            'brand_id' => 11,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EB 110',
            'brand_id' => 11,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Veyron',
            'brand_id' => 11,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Centurion',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Century',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Electra',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Enclave',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Encore',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lacrosse',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Le Sabre',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lucerne',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Park Avenue',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Reatta',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Regal',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rendezvous',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Riviera',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadmaster',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Shyhawk',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Skylark',
            'brand_id' => 12,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Allante',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ATS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'BLS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Brougham',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Catera',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cimarron',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CT6',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CTS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Deville',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DTS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Eldorado',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ELR',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Escalade',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fleetwood',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seville',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SLS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SRX',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'STS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'STS-V',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XLR',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XT4',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XT5',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XT6',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XTS',
            'brand_id' => 13,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Academy',
            'brand_id' => 14,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CSR',
            'brand_id' => 14,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadsport',
            'brand_id' => 14,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seven',
            'brand_id' => 14,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Super Seven',
            'brand_id' => 14,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1500',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2500',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3500',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alero',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Apache',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Astro',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avalanche',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aveo',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bel Air',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Beretta',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Blazer',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bolt',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-10',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-20',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-30',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Camaro',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caprice',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Captiva',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cavalier',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Celebrity',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chevelle',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chevy Van',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Citation',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cobalt',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Colorado',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corsica',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corvette',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cruze',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'El Camino',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Epica',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Equinox',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Evanda',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Express',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'G',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'HHR',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Impala',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'K30',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'K1500',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kalos',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lacetti',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lumina',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Malibu',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Matiz',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monte Carlo',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monza',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nova',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nubira',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Orlando',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rezzo',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S-10',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silverado',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spark',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spectrum',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SSR',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Suburban',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tacuma',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tahoe',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trailblazer',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trans Sport',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Traverse',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trax',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Venture',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Volt',
            'brand_id' => 15,
        ]);

        DB::table('carmodels')->insert([
            'model' => '200',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => '300',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => '300C',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => '300M',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => '300s',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aspen',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caravan',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Concorde',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crossfire',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Daytona',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ES',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Voyager',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GS',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GTS',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Le Baron',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LHS',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Neon',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'New Yorker',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pacifica',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prowler',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'PT Cruiser',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Saratoga',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sebring',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stratus',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Town $ Country',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Valiant',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Viper',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vision',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Voyager',
            'brand_id' => 16,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2 CV',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'AX',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Axel',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Berlingo',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'BX',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-Crosser',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-Elysee',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-Zero',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C1',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C2',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C3',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C3 Aircross',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C3 Picasso',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C3 Pluriel',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4 Aircross',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4 Cactus',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4 Grand Picasso',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4 Picasso',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C4 SpaceTourer',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C5',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C5 Aircross',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C6',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C8',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DS',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DS3',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DS4',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DS5',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Evasion',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GSA',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jumper',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jumpy Combi',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nemo',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Saxo',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SM',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SpaceTourer',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Visa',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xantia',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XM',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xsara',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xsara Picasso',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ZX',
            'brand_id' => 17,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ateca',
            'brand_id' => 18,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Formentor',
            'brand_id' => 18,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leon',
            'brand_id' => 18,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leon Sportstourer',
            'brand_id' => 18,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1300',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1310',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1400',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1410',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dokker',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dokker Van',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Duster',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lodgy',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Logan',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'logan Van',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nova',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pick Up',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sandero',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sandero Stepway',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Solenza',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spring',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Super Nova',
            'brand_id' => 19,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chairman',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cielo',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Espero',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Evanda',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kalos',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Korando',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lacetti',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lanos',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leganza',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Matiz',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Musso',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nexia',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nubira',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Racer',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rezzo',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tacuma',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tico',
            'brand_id' => 20,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Applause',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Charade',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Charmant',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Copen',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cuore',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Feroza',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fourtrak',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Freeclimber',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gran Move',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Hijet',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Materia',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Move',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rocky',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sirion',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sportrak',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Terios',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trevis',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'YRV',
            'brand_id' => 21,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'DMC',
            'brand_id' => 22,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avenger',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caliber',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caravan',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Challenger',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Charger',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dakota',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dart',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Daytona',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Diplomat',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Durango',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dynasty',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Caravan',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Hornet',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Intrepid',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Journey',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Magnum',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monaco',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Neon',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nitro',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Omni',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RAM',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spirit',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stealth',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stratus',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Viper',
            'brand_id' => 23,
        ]);

        DB::table('carmodels')->insert([
            'model' => '208',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '248',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '250',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '288',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '308',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '328',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '330',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '348',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '360',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '365',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '400',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '412',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '456',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '458 Italia',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '488',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '488 Pista',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '488 Pista Spider',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '512',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '575',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '599GTB',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '612',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '750',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '812 GTS',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '812 Superfast',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'California',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Daytona',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dino GT4',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Enzo',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F8 Spider',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F8 Tributo',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F12 Berlinetta',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F40',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F50',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F355',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F360',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F430',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F550',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'FF',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GTC4 Lusso',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LaFerrari',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mondial',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Portofino',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Portofino M',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roma',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SF90 Spider',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SF90 Stradale',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Superamerica',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Testarossa',
            'brand_id' => 24,
        ]);

        DB::table('carmodels')->insert([
            'model' => '124',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '124 Spider',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '125p',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '126',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '127',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '128',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '130',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '131',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '132',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '500',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '500L',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '500X',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '600',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => '850',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Albea',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Barchetta',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Brava',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bravo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cinquecento',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Croma',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dino',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Doblo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ducato',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fiorino',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Freemmont',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fullback',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grande Punto',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'idea',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'linea',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Marea',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'multipla',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Palio',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Panda',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Punto',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Punto 2012',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Punto Evo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Qubo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Regata',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ritmo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scudo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sedici',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seicento',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Siena',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spider Europa',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stilo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Strada',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Talento',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tempra',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tipo',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ulysse',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Uno',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X 1',
            'brand_id' => 25,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aerostar',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aspire',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'B-MAX',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bronco',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-MAX',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Capri',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Contour',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cougar',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Courier',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crown',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Econoline',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Econovan',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EcoSport',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EDGE',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Escape',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Escort',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Excursion',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Expedition',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Explorer',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F150',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F250',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F350',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fairlane',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Falcon',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Festiva',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fiesta',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Five Hundred',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Flex',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Focus',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Focus C-Max',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Freestar',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'freestyle',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fusion',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Galaxy',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Granada',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'grand C-MAX',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GT',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'KA',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'KA+',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kuga',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'maverick',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mercury',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mondeo',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mustang',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mustang Mach-E',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Orion',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Probe',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Puma',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ranchero',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ranger',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ranger Raptor',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S-Max',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scorpio',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sierra',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Streetka',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Taunus',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Taurus',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tempo',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'thunderbird',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tourneo Connect',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tourneo Courier',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tourneo Custom',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Transit',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Transit Connect',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Transit Courier',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Transit Custom',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Windstar',
            'brand_id' => 26,
        ]);

        DB::table('carmodels')->insert([
            'model' => '67',
            'brand_id' => 27,
        ]);

        DB::table('carmodels')->insert([
            'model' => '69',
            'brand_id' => 27,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Acadia',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Envoy',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Safari',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Savana',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sierra',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sonoma',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Syclone',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Terrain',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Typhoon',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vandura',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Yukon',
            'brand_id' => 28,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Accord',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aerodeck',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'City',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Civic',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Concerto',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CR-V',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CR-Z',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CRX',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'e',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Element',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'FR-V',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'HR-V',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Insight',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Integra',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jazz',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'legend',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Logo',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NSX',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Odyssey',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pilot',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prelude',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S 2000',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Shuttle',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stream',
            'brand_id' => 29,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H1',
            'brand_id' => 30,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H2',
            'brand_id' => 30,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H3',
            'brand_id' => 30,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Accent',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Atos',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avante',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Azera',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bayon',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Elantra',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Equus',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Excel',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Galloper',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Genesis',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Genesis Coupe',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Getz',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grandeur',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Santa Fe',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H-1',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H-1 Starex',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H200',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'H350',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i10',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i20',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i25',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i30',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i30 N',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i40',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'IONIQ',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ix20',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ix35',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ix55',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kona',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lantra',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Matrix',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pony',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S-Coupe',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Santa Fe',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Santamo',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sonata',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sonica',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Terracan',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trajet',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'tucson',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Veloster',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Veracruz',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XG 30',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XG 350',
            'brand_id' => 31,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EX',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'FX',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'G',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'I30',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'I35',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'J30',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q30',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q45',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q50',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q60',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Q70',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX30',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX50',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX60',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX70',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'QX80',
            'brand_id' => 32,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Inny',
            'brand_id' => 33,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Campo',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'D-Max',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gemini',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Midi',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'pick up',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trooper',
            'brand_id' => 34,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Massif',
            'brand_id' => 35,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Daimler',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'E-Pace',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'E-Type',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F-Pace',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F-Type',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'I-Pace',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Inny',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MK II',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S-type',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X-Type',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XE',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XF',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XJ',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XJS',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XK',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XK8',
            'brand_id' => 36,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cherokee',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CJ',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Comanche',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Commander',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Compass',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gladiator',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Cherokee',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Liberty',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Patriot',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Renegade',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Wagoneer',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Willys',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Wrangler',
            'brand_id' => 37,
        ]);

        DB::table('carmodels')->insert([
            'model' => ' ',
            'brand_id' => 38,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Asia Rocsta',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Besta',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carens',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carnival',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ceed',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cerato',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Clarus',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Elan',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Joice',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leo',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Magentis',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mentor',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'niro',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Opirus',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Optima',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Picanto',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pregio',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pride',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pro_ceed',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Retona',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rio',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadster',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rocsta',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sedona',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sephia',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Shuma',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sorento',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'OptimSoula',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spectra',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sportage',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stinger',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stonic',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Venga',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XCeed',
            'brand_id' => 39,
        ]);

        DB::table('carmodels')->insert([
            'model' => '110',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '111',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '112',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1117',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1118',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1119',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1200',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1300',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1500',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2101',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2103',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2104',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2105',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2106',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2107',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2108',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2109',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2110',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2111',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2112',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2170',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aleko',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'forma',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Granta',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kalina',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Niva',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nova',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Priora',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Samara',
            'brand_id' => 40,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aventador',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Countach',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Diablo',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Espada',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gallardo',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Huracan',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jalpa',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LM',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Miura',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Murcielago',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Urraco',
            'brand_id' => 41,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Urus',
            'brand_id' => 41,
        ]);
    
        DB::table('carmodels')->insert([
            'model' => 'Beta',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dedra',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Delta',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Flamina',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fulvia',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gamma',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kappa',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lybra',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Musa',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Phedra',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prisma',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stratos',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Thema',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Thesis',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Voyager',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ypsilon',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Zeta',
            'brand_id' => 42,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Defender',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Discovery',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Discovery Sport',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'freelander',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Range Rover',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Range Rover Evoque',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Range Rover sport',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Range Rover velar',
            'brand_id' => 43,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CT',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ES',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GS',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GX',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'HS 250h',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'IS',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LC',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LFA',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LS',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LX',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NX',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RC',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RX',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SC',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'UX',
            'brand_id' => 44,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aviator',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Continental',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LS',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'mark',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'mark LT',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MKX',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MKZ',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Navigator',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Town Car',
            'brand_id' => 45,
        ]);

        DB::table('carmodels')->insert([
            'model' => '340R',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cortina',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Elan',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Elise',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Elite',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Esprit',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Europa',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Evora',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Excel',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Exige',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Super Seven',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V8',
            'brand_id' => 46,
        ]);

        DB::table('carmodels')->insert([
            'model' => ' ',
            'brand_id' => 47,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TGE',
            'brand_id' => 48,
        ]);

        DB::table('carmodels')->insert([
            'model' => '222',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '224',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '228',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '418',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '420',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '422',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '424',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '430',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3200',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4200',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Biturbo',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ghibli',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GranCabrio',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Gransport',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GranTurismo',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Indy',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Karif',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Levante',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MC12',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MC Stradale',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Merak',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Quattroporte',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Shamal',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spyder',
            'brand_id' => 49,
        ]);

        DB::table('carmodels')->insert([
            'model' => '57',
            'brand_id' => 50,
        ]);

        DB::table('carmodels')->insert([
            'model' => '62',
            'brand_id' => 50,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '5',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '6',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '121',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '323',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '323F',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '626',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '929',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bongo',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'BT-50',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX-3',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX-5',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX-7',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX-9',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CX-30',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Demio',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Millenia',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MPV',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MX-3',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MX-5',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MX-6',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MX-30',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Premacy',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Protege',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RX-6',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RX-7',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RX-8',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria B',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria E',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tribute',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xedos',
            'brand_id' => 51,
        ]);

        DB::table('carmodels')->insert([
            'model' => '570 GT',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '570S Coupe',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '570S Spider',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '600LT Coupe',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '600LT Spider',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '650S',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '720 S Coupe',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '720 S Spider',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Altul',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F1',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MP4-12C',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Senna',
            'brand_id' => 52,
        ]);

        DB::table('carmodels')->insert([
            'model' => '280',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'AMG GT',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Citan',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CL',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CLA',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CLC',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CLK',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CLS',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EQA',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EQC',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EQS',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'EQV',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GL',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GLA',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GLB',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GLC',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GLK',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GLS',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa A',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa B',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa C',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa E',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa G',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa G',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa R',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa S',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa V',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Klasa X',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MB 100',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ML',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monarch',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SL',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SLC',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SKL',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SLR',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SLS',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sprinter',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vaneo',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vario',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Viano',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vito',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'W123',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'W124',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'W201',
            'brand_id' => 53,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Comet',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cougar',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Maruder',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mariner',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Marquis',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Milan',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montego',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monterey',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mountaineer',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sable',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tracer',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Villager',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Zephyr',
            'brand_id' => 54,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'F',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MGA',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MGB',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MGF',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'midget',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montego',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TD',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TF',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ZR',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ZS',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ZT',
            'brand_id' => 55,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1000',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1300',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Clubman',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cooper',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cooper S',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Countryman',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ONE',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Paceman',
            'brand_id' => 56,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3000 GT',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ASX',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Canter',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carisma',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Colt',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cordia',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cosmos',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Diamante',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Eclipse',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Eclipse Cross',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Endeavor',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'FTO',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Galant',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'galloper',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grandis',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'i-miEV',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'L200',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'L300',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'L400',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'lancer',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lancer Evolution',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montero',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Outlander',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pajero',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pajero Pinin',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Santamo',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sapporo',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sigma',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Space Gear',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Space Runner',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Space Star',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Space Wagon',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Starion',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tredia',
            'brand_id' => 57,
        ]);

        DB::table('carmodels')->insert([
            'model' => '100 NX',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '200 SX',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '240 SX',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '280 ZX',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '300 ZX',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '350 Z',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => '370 Z',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Almera',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Almera Tino',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Altima',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Armada',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bluebird',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cherry',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cube',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Frontier',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GT-R',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Interstar',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Juke',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'king cab',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kubistar',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Laurel',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leaf',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Maxima',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Micra',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Murano',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Navara',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Note',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NP300 Pickup',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NV200',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NV300',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'NV400',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'pathfinder',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Patrol',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pickup',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pixo',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prairie',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Primastar',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Primera',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pulsar',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Qashqai',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Qashqai +2',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Quest',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rogue',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sentra',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Serena',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silvia',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Skyline',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Stanza',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sunny',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Terrano',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tiida',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Titan',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trade',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Urvan',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vanette',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X-trail',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xterra',
            'brand_id' => 58,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 500',
            'brand_id' => 59,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria N',
            'brand_id' => 59,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Adam',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Agila',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ampera',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Antara',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arena',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ascona',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Astra',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Calibra',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Campo',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cascada',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Combo',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Commodore',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corsa',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crossland X',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Diplomat',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Frontera',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grandland X',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GT',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Insignia',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kadett',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'karl',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Manta',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Meriva',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mokka',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monterey',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Monza',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nova',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Omega',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pick up Sportcap',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rekord',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Senator',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Signum',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sintra',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Speedster',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tigra',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vectra',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vivaro',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Zafira',
            'brand_id' => 60,
        ]);

        DB::table('carmodels')->insert([
            'model' => '104',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '106',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '107',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '108',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '204',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '205',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '206',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '206 CC',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '206 plus',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '207',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '207 CC',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '208',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '301',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '304',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '305',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '306',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '307',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '307 CC',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '308',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '308 CC',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '309',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '395',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '404',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '405',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '406',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '407',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '504',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '505',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '508',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '604',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '605',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '607',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '806',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '807',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1007',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2008',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3008',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4007',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4008',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '5008',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bipper',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Boxer',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Expert',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Partner',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RCZ',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Rifter',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Traveller',
            'brand_id' => 61,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1',
            'brand_id' => 62,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2',
            'brand_id' => 62,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1.5',
            'brand_id' => 63,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1.6',
            'brand_id' => 63,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Atu',
            'brand_id' => 63,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caro',
            'brand_id' => 63,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1000',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => '6000',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bonneville',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Catalina',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chieftain',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fiero',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Firebird',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'G6',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand-Am',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand-Prix',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GTO',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Le Mans',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montana',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Solstice',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sunbird',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sunfire',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'trans Am',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trans Sport',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vibe',
            'brand_id' => 64,
        ]);

        DB::table('carmodels')->insert([
            'model' => '356',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '718 Boxster',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '718 Cayman',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '718 Spyder',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '911',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '912',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '914',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '924',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '928',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '944',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '959',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '962',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '968',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Boxster',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carrera GT',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cayenne',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cayman',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Macan',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Panamera',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Taycan',
            'brand_id' => 65,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1500',
            'brand_id' => 66,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2500',
            'brand_id' => 66,
        ]);

        DB::table('carmodels')->insert([
            'model' => '3500',
            'brand_id' => 66,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '5',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '8',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '9',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '10',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '11',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '12',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '14',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '18',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '19',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '20',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '21',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '25',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => '30',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alaskan',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alpine A110',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alpine A310',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alpine V6',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arkana',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avantime',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Captur',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Clio',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Coupe',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Espace',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Express',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fluence',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fuego',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Espace',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Scenic',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kadjar',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kangoo',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Koleos',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Laguna',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Latitude',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Master',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Megane',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Modus',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Safrane',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scenic',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scenic Conquest',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scenic RX4',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Symbol',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Talisman',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Thalia',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trafic',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Twingo',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Twizy',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vel Satis',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Wind',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Zoe',
            'brand_id' => 67,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corniche',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cullinan',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Flying Spur',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ghost',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Park Ward',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Phantom',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Cloud',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Down',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Seraph',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Shadow',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Spirit',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Silver Spur',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Touring Limousine',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Wraith',
            'brand_id' => 68,
        ]);

        DB::table('carmodels')->insert([
            'model' => '25',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '45',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '75',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '100',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '111',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '114',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '115',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '200',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '213',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '214',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '216',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '218',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '220',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '400',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '414',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '416',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '418',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '420',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '600',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '618',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '620',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '623',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '800',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '820',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '825',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '827',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'City Rover',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Metro',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MG',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mini',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Montego',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SD',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Streetwise',
            'brand_id' => 69,
        ]);

        DB::table('carmodels')->insert([
            'model' => '9-2X',
            'brand_id' => 70,
        ]);
        DB::table('carmodels')->insert([
            'model' => '9-3',
            'brand_id' => 70,
        ]);
        DB::table('carmodels')->insert([
            'model' => '9-3X',
            'brand_id' => 70,
        ]);
        DB::table('carmodels')->insert([
            'model' => '9-5',
            'brand_id' => 70,
        ]);
        DB::table('carmodels')->insert([
            'model' => '9-7X',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => '90',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => '96',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => '99',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => '900',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => '9000',
            'brand_id' => 70,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alhambra',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Altea',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Altea XL',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arona',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arosa',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ateca',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cordoba',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Exeo',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ibiza',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Inca',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leon',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Malaga',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Marbella',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mii',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ronda',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tarraco',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'terra',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Toledo',
            'brand_id' => 71,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crossblade',
            'brand_id' => 72,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Forfour',
            'brand_id' => 72,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fortwo',
            'brand_id' => 72,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadster',
            'brand_id' => 72,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roomster',
            'brand_id' => 72,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1800 Coupe',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'B9 tribeca',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Baja',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'BRZ',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Forester',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'G3X Justy',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Impreza',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Legacy',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Leone',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Levorg',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'OUTBACK',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SVX',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Trezia',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tribeca',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vivio',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'WRX',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XT',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XV',
            'brand_id' => 73,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Across',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Alto',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Baleno',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cappucino',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carry',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Celerio',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Grand Vitara',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Ignis',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jimmy',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kizashi',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Liana',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LJ',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Reno',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Samurai',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SJ',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Splash',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Super-Carry',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Swace',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Swift',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SX4',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'SX4 S-Cross',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vitara',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Wagon R+',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'X-90',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XL7',
            'brand_id' => 74,
        ]);

        DB::table('carmodels')->insert([
            'model' => '101',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => '102',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => '103',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => '104',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => '105',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bosto',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'R-20',
            'brand_id' => 75,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Indica',
            'brand_id' => 76,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Indigo',
            'brand_id' => 76,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Nano',
            'brand_id' => 76,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Safari',
            'brand_id' => 76,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Xenon',
            'brand_id' => 76,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'T613',
            'brand_id' => 77,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'T613-4',
            'brand_id' => 77,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'T700',
            'brand_id' => 77,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Model 3',
            'brand_id' => 78,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Model S',
            'brand_id' => 78,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Model X',
            'brand_id' => 78,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roadster',
            'brand_id' => 78,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Y',
            'brand_id' => 78,
        ]);

        DB::table('carmodels')->insert([
            'model' => '4-Runner',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Auris',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avalon',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avensis',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Avensis Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Aygo',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C-HR',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Camry',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Camry Solara',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Carina',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Celica',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corolla',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corolla Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cressida',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crown',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dyna',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'FJ',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GT86',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Hiace',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Highlander',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'hilux',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'iQ',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Land Cruiser',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lite-Ace',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Matrix',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Mirai',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'MR2',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Paseo',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Picnic',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Previa',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prius',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Prius+',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ProAce',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ProAce City',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'proAce City Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ProAce Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RAV4',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sequoia',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sienna',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Starlet',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Supra',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tacoma',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tercel',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tundra',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Urban Cruiser',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Venza',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Verso S',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Yaris',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Yaris Verso',
            'brand_id' => 79,
        ]);

        DB::table('carmodels')->insert([
            'model' => '601',
            'brand_id' => 80,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'P 50',
            'brand_id' => 80,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Dolomite',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Moss',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Spitfire',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR3',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR4',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR5',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR6',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR7',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'TR8',
            'brand_id' => 81,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Cerbera',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Chimaera',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Griffith',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tamora',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tasmin',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tuscan',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vixen',
            'brand_id' => 82,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Astra',
            'brand_id' => 83,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Frontera',
            'brand_id' => 83,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Omega',
            'brand_id' => 83,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vectra',
            'brand_id' => 83,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vivaro',
            'brand_id' => 83,
        ]);

        DB::table('carmodels')->insert([
            'model' => '181',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Amarok',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Arteon',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Atlas',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Beetle',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Bora',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Buggy',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caddy',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'California',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Caravelle',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'CC',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Corrado',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Crafter',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Eos',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fox',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Garbus',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Golf',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Golf Plus',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Golf Sportsvan',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ID.3',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'ID.4',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Iltis',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Jetta',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kafer',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Karmann Ghia',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'LT',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Lupo',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Multivan',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'New Beetle',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Passat',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Passat CC',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Phaeton',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Polo',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Routan',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Santana',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scirocco',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Sharan',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'T-Cross',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'T-Roc',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Teramont',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tiguan',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Tiguan Allspace',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Touareg',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Touran',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Transporter',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'up!',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Vento',
            'brand_id' => 84,
        ]);

        DB::table('carmodels')->insert([
            'model' => '245',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '262',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '340',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '744',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '745',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '780',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '850',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '855',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '945',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '965',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C30',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C40',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'C70',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Polar',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S40',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S60',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S70',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S80',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'S90',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 200',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 300',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 400',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 700',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Seria 900',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V40',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V50',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V60',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V70',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'V90',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XC 40',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XC 60',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XC 70',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'XC 90',
            'brand_id' => 85,
        ]);

        DB::table('carmodels')->insert([
            'model' => '203',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => '204',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => '223',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => '224',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'M-20',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Pick-up',
            'brand_id' => 86,
        ]);

        DB::table('carmodels')->insert([
            'model' => '1.3',
            'brand_id' => 87,
        ]);

        DB::table('carmodels')->insert([
            'model' => '311',
            'brand_id' => 87,
        ]);

        DB::table('carmodels')->insert([
            'model' => '312',
            'brand_id' => 87,
        ]);

        DB::table('carmodels')->insert([
            'model' => '313',
            'brand_id' => 87,
        ]);

        DB::table('carmodels')->insert([
            'model' => '353',
            'brand_id' => 87,
        ]);

        DB::table('carmodels')->insert([
            'model' => '2410',
            'brand_id' => 88,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GAZ-21',
            'brand_id' => 88,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'GAZ-24',
            'brand_id' => 88,
        ]);

        DB::table('carmodels')->insert([
            'model' => '100',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => '105',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => '120',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => '130',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => '135',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Citigo',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Enyaq',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Fabia',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Favorit',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Felicia',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Forman',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kamiq',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Karoq',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Kodiaq',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Octavia',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Praktik',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'RAPID',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Roomster',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Scala',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Superb',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => 'Yeti',
            'brand_id' => 89,
        ]);

        DB::table('carmodels')->insert([
            'model' => ' ',
            'brand_id' => 90,
        ]);
    }
}
