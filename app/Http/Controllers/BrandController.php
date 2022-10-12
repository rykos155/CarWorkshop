<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Carmodel;
use Illuminate\Http\Request;
use App\Http\Requests\Brands\StoreBrandRequest;
use App\Http\Requests\Brands\UpdateBrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::with('carmodel')->get();

        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand([
            'brand' => $request->input('marka')
        ]);

        try {      
            $brand->save();

            return redirect()->route('cars.index')
                ->with('success', __("Pomyślnie dodano nową markę pojazdu $brand->brand"));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('cars.index')
                        ->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('cars.index')
                        ->with('error', __('Błąd podczas dodawania nowej marki!'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $brand = Brand::findOrFail($id);
        $edit = true;
        return view('brands.form', compact('car', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $brand->brand = $request->input('brand');
        $brand->save();

        return redirect()->route('cars.index')
            ->with('success', __("Pomyślnie zmieniono nazwę marki $brand->brand"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands.index')
            ->with('success', __('translation.brands.destroy.messages.success'));
    }
}
