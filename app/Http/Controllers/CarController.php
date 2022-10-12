<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\File;
use App\Models\Brand;
use App\Models\Carmodel;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('brand','client','carmodel')->get();
        $title = "";
        $idClient = "";

        return view('cars.index', compact('cars','title','idClient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $brands = Brand::all();
        $carmodels = Carmodel::all();
        $client = Client::find($id);
        $edit = false;
        $idClient = "";

        return view('cars.form', compact('brands', 'carmodels', 'client', 'id','edit','idClient'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request, $id)
    {
        $car = new Car([
            'client_id' => $id,
            'brand_id' => $request->input('marka'),
            'model_id' => $request->input('model'),
            'generation' => $request->input('generacja'),
            'productionYear' => $request->input('rokProdukcji'),
            'registrationNumber' => $request->input('rejestracja'),
            'VIN' => $request->input('vin'),
            'color' => $request->input('kolor'),
            'type' => $request->input('typNadwozia'),
            'engineType' => $request->input('rodzajSilnika'),
            'engineCapacity' => $request->input('pojemnosc'),
            'enginePower' => $request->input('moc'),
            'mileage' => $request->input('przebieg')
        ]);

        try {    
            $car->save();

            $newID = $car->id;
            
            return redirect()->route('cars.showOneCar', $newID)->with('success', __('Pomyślnie dodano samochód do listy klienta!'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.index')
                        ->with('error', __('Błąd podczas dodawania, zduplikowane dane!'));
                    break;
                default:
                    return redirect()->route('clients.index')
                        ->with('error', __('Błąd podczas dodawania samochodu do listy!'));
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
        $cars = Car::with('brand','client','carmodel')->where('client_id',$id)->get();
        foreach($cars->take(1) as $car){
            $imie = $car->client->name;
            $nazwisko = $car->client->surname;
            $idClient = $car->client->id;
        }
        $title = "Lista pojazdów klienta " . $imie . " " . $nazwisko;

        return view('cars.show', compact('cars','id','title','idClient'));
    }

    public function showOneCar($id)
    {
        $cars = Car::with('brand','client','carmodel')->where('id', $id)->get();
        foreach($cars->take(1) as $car){
            $imie = $car->client->name;
            $nazwisko = $car->client->surname;
            $idClient = $car->client->id;
        }
         
        $title = "Panel pojazdu klienta " . $imie . " " . $nazwisko;

        return view('cars.show', compact('cars','id','title','idClient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::all();
        $brands = Brand::all();
        $carmodels = Carmodel::all();

        $car = Car::findOrFail($id);
        $edit = true;
        return view('cars.form', compact('car', 'edit','clients','brands','carmodels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, $id)
    {
        $car = car::findOrFail($id);

        $car->$id;
        $car->brand_id = $request->input('marka');
        $car->model_id = $request->input('model');
        $car->generation = $request->input('generacja');
        $car->productionYear = $request->input('rokProdukcji');
        $car->registrationNumber = $request->input('rejestracja');
        $car->VIN = $request->input('vin');
        $car->color = $request->input('kolor');
        $car->type = $request->input('typNadwozia');
        $car->engineType = $request->input('rodzajSilnika');
        $car->engineCapacity = $request->input('pojemnosc');
        $car->enginePower = $request->input('moc');
        $car->mileage = $request->input('przebieg');

        $car->save();

        try {
            $car->save();

            return redirect()->route('cars.showOneCar', $id)->with('success', __("Pomyślnie zaaktualizowano dane pojazdu" ));
             } catch (\Illuminate\Database\QueryException $e) {
                \Log::error($e);
    
                switch ($e->getCode()) {
                     case '23000':
                         return redirect()->route('cars.index')
                             ->with('error', __('Błąd powtórzonych danych!'));
                         break;
                     default:
                        return redirect()->route('cars.index')
                             ->with('error', __('Błąd podczas edytowania danych pojazdu!'));
                 }
             }
        }
}
