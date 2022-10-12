<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Car;
use App\Models\Order;
use App\Models\Status;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::get();
        $clients = Client::get();
        $cars = Car::get();

        $ordersEnded = Order::with('car','status')->whereIn('status_id',['5'])->get();

        $ordersInProgress = Order::with('car','status')->whereNotIn('status_id',['4','5'])->get();

        return view('home', compact('users','clients','cars','ordersEnded','ordersInProgress'));
    }
}
