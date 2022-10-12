<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Service;
use App\Models\Estimate;
use Illuminate\Http\Request;
use App\Http\Requests\Services\StoreServiceRequest;
use App\Http\Requests\Services\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('estimate')->get();

        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $estimates = Estimate::findOrFail($id);
        $idOrder = $estimates->order_id;

        return view('services.form', compact('id','idOrder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request, $id)
    {
        $service = new Service([
            'estimate_id' => $id,
            'name' => $request->input('nazwa'),
            'price' => $request->input('cena'),
        ]);

        try {
            $service->save();

            return redirect()->route('estimates.showOneEstimate', $id)->with('success', __('Pomyślnie stworzono nową usługe.'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('estimates.showOneEstimate', $id)->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('estimates.showOneEstimate', $id)->with('error', __('Błąd podczas dodawania nowego zlecenia!'));
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
        $services = Service::with('estimate')->where('estimate_id',$id)->get();

        return view('services.index', compact('services','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $edit = true;

        return view('services.form', compact('service', 'edit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->$id;
        $service->name = $request->input('nazwa');
        $service->price = $request->input('cena');
        $service->save();

        $newID = $service->estimate->id;


        return redirect()->route('services.show', $newID)->with('success', __('Pomyślnie zaaktualizowano usługę'));
    }

    public function generatePDFforService($id)
    {
        $data = Service::with('estimate')->where('estimate_id',$id)->get();
       
        view()->share('service',$data);
        $pdf = PDF::loadView('services/servicesPDF', $data);

        return $pdf->download('usługa.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        $newID = $service->estimate->id;

        return redirect()->route('services.show', $newID)->with('success', __('Pomyślnie usunięto usługę'));
    }
}
