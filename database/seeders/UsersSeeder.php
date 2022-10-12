<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator',
            'surname' => 'Administrator',
            'email' => 'administrator@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::findByName('Administrator');
        if(isset($role)){
            $user->assignRole($role);
        }

        $user = User::create([
            'name' => 'Kierownik',
            'surname' => 'Kierownik',
            'email' => 'kierownik@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Marek',
            'surname' => 'Kowalczyk',
            'email' => 'pracownik1@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Antek',
            'surname' => 'Kowalczyk',
            'email' => 'pracownik2@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Jarek',
            'surname' => 'Nowak',
            'email' => 'pracownik3@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $user = User::create([
            'name' => 'Marcin',
            'surname' => 'Pilarcyzk',
            'email' => 'pracownik4@wp.pl',
            'password' => bcrypt('12345678')
        ]);
    }
}
