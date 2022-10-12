<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_correctly_displays_the_clients_list()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest1@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('clients');
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_displays_the_client_panel()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest2@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('clients/1');
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_displays_the_calendar()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest3@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('calendar');
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_displays_the_form_to_add_a_client()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest1@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('clients/create');
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_displays_the_form_to_add_a_car()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest1@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('cars/1/create');
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_add_and_display_the_new_order()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest4@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $order = Order::create([
            'car_id' => 2,
            'status_id' => 1,
            'user_id' => $user->id,
            'startDate' =>'2022-02-08',
            'endDate' => '2022-02-10',
            'description' => 'Problemy z uruchomieniem pojazdu'
        ]);

        $response = $this->get("orders/$order->id/showOneOrder");
        $response->assertStatus(200);

        $user->forceDelete();
    }

    public function test_correctly_displays_the_parts_to_buy_list()
    {
        $user = User::create([
            'name' => 'test',
            'surname' => 'test',
            'email' => 'testtest1@wp.pl',
            'password' => bcrypt('12345678')
        ]);

        $this->actingAs($user);

        $response = $this->get('parts/partToBuy');
        $response->assertStatus(200);

        $user->forceDelete();
    } 
}
