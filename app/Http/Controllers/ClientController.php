<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Province;
use App\Models\Client;
use App\Models\Estimate;
use App\Models\Order;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\Clients\StoreClientRequest;
use App\Http\Requests\Clients\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('province','car','comment')->whereIn('deactivate',[0])->get();
        $activeOrders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->pluck('car_id')->toArray();
        $endedOrders = Order::with('car','estimate','status','user')->whereIn('status_id',['4','5'])->pluck('car_id')->toArray();
        $view = false;

        return view('clients.index', compact('clients','activeOrders','endedOrders','view'));
    }

    public function softDeleteClients()
    {
        $clients = Client::with('province','car','comment')->whereIn('deactivate',[1])->get();
        $view = true;

        return view('clients.index', compact('clients','view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        $cars = Car::all();

        return view('clients.form', compact('provinces','cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $client = new Client([
            'name' => $request->input('imię'),
            'surname' => $request->input('nazwisko'),
            'pesel' => $request->input('pesel'),
            'phoneNumber' => $request->input('telefon'),
            'email' => $request->input('email'),
            'home' => $request->input('miejsceZamieszkania'),
            'street' => $request->input('ulica'),
            'houseNumber' => $request->input('numerDomu'),
            'flatNumber' => $request->input('mieszkanie'),
            'zipCode' => $request->input('kodPocztowy'),
            'commune' => $request->input('gmina'),
            'province_id' => $request->input('wojewodztwo'),
            'deactivate' => 0,
        ]);

        try {
            $client->save(); 

            return redirect()->route('clients.show', $client->id)->with('success', __("Pomyślnie dodano klienta $client->name $client->surname" ));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.index')->with('error', __('Taki klient już istnieje!'));
                    break;
                default:
                    return redirect()->route('clients.index')->with('error', __('Wystąpił błąd podczas tworzenia nowego klienta!'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::with('province','car','comment')->where('id',$id)->get();

        $activeOrders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->pluck('car_id')->toArray();
        $endedOrders = Order::with('car','estimate','status','user')->whereIn('status_id',['4','5'])->pluck('car_id')->toArray();

        return view('clients.show', compact('clients','activeOrders','endedOrders','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $provinces = Province::all();
        $client = Client::with('province')->findOrFail($id);
        $edit = true;

        return view('clients.form', compact('client', 'edit','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, $id)
    {
        $client = client::findOrFail($id);

        $client->name = $request->input('imię');
        $client->surname = $request->input('nazwisko');
        $client->pesel = $request->input('pesel');
        $client->phoneNumber = $request->input('telefon');
        $client->email = $request->input('email');
        $client->home = $request->input('miejsceZamieszkania');
        $client->street = $request->input('ulica');
        $client->houseNumber = $request->input('numerDomu');
        $client->flatNumber = $request->input('mieszkanie');
        $client->zipCode = $request->input('kodPocztowy');
        $client->commune = $request->input('gmina');
        $client->province_id = $request->input('wojewodztwo');

        $client->save();

        try {
        return redirect()->route('clients.index')->with('success', __("Pomyślnie zaaktualizowano dane klienta $client->name $client->surname" ));
         } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);

            switch ($e->getCode()) {
                 case '23000':
                     return redirect()->route('clients.index')
                         ->with('error', __('Błąd powtórzonych danych!'));
                     break;
                 default:
                    return redirect()->route('clients.index')
                         ->with('error', __('Błąd podczas edytowania danych klienta!'));
             }
         }
    }

    public function ban($id){
        $client = client::findOrFail($id);
        $client -> deactivate = 1;

        try {
            $client->save();

            return redirect()->route('clients.softDeleteClients')->with('success', __("Pomyślnie zablokowano klienta $client->name $client->surname" ));

         } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);

            switch ($e->getCode()) {
                 case '23000':
                     return redirect()->route('clients.index')->with('error', __('Błąd powtórzonych danych!'));
                     break;
                 default:
                    return redirect()->route('clients.index')->with('error', __('Błąd podczas blokady klienta!'));
             }
         }
    }

    public function restore($id)
    {
        $client = client::findOrFail($id);
        $client -> deactivate = 0;

        try {
            $client->save();

            return redirect()->route('clients.index')->with('success', __("Pomyślnie odblokowano klienta $client->name $client->surname" ));

         } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);

            switch ($e->getCode()) {
                 case '23000':
                     return redirect()->route('clients.softDeleteClients')->with('error', __('Błąd powtórzonych danych!'));
                     break;
                 default:
                    return redirect()->route('clients.softDeleteClients')->with('error', __('Błąd podczas odblokowywania klienta!'));
             }
         }
    }
}
