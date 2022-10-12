<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Carmodel;
use Illuminate\Http\Request;
use App\Http\Requests\Carmodels\StoreCarmodelRequest;
use App\Http\Requests\Carmodels\UpdateCarmodelRequest;

class CarmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carmodels = Carmodel::with('brand')->get();
        $brands = Brand::all();

        return view('carmodels.index', compact('carmodels','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $carmodels = Carmodel::all();

        return view('carmodels.form', compact('brands', 'carmodels'));
    }

    public function getModels($id)
    {
        $carmodels = Carmodel::where('brand_id',$id)->get();
        $output = [];
        foreach($carmodels as $carmodel){
            $output[$carmodel->id]=$carmodel->model;
        }

        return $output;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarmodelRequest $request)
    {
        $carmodel = new Carmodel([
            'brand_id' => $request->input('brand_id'),
            'model' => $request->input('model')
        ]);

        try {      
            $carmodel->save();

            return redirect()->route('carmodels.index')
                ->with('success', __("Pomyślnie dodano nowy pojazd $carmodel->brand_id $carmodel->model"));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('carmodels.index')
                        ->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('carmodels.index')
                        ->with('error', __('Błąd podczas dodawania nowego samochodu!'));
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
        $carmodel = Carmodel::findOrFail($id);
        return view('carmodels.show', compact('carmodel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $carmodel = Carmodel::with('brand')->findOrFail($id);
        $edit = true;

        return view('carmodels.form', compact('carmodel', 'edit','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarmodelRequest $request, $id)
    {
        $carmodel = client::findOrFail($id);
        $carmodel->brand_id = $request->input('brand_id');
        $carmodel->model = $request->input('model');
        $carmodel->save();

        return redirect()->route('carmodels.index')
            ->with('success', __('translation.cars.edit.messages.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carmodel = Car::findOrFail($id);
        $carmodel->delete();

        return redirect()->route('carmodels.index')
            ->with('success', __('translation.carmodels.destroy.messages.success'));
    
    }
}
