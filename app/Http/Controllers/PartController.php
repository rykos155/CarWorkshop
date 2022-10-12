<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Car;
use App\Models\Part;
use App\Models\Category;
use App\Models\Estimate;
use Illuminate\Http\Request;
use App\Http\Requests\Parts\StorePartRequest;
use App\Http\Requests\Parts\UpdatePartRequest;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts = Part::with('estimate')->get();

        return view('parts.index', compact('parts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $estimates = Estimate::findOrFail($id);
        $categories = Category::all();
        $edit = false;
        $idOrder = $estimates->order_id;

        return view('parts.form', compact('estimates','id','categories','edit','idOrder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartRequest $request, $id)
    {
        $part = new Part([
            'estimate_id' => $id,
            'name' => $request->input('nazwa'),
            'category_id' => $request->input('kategoria'),
            'amount' => $request->input('ilość'),
            'price' => $request->input('cena'),
            'inStock' => $request->has('stanMagazynowy') == 1,
        ]);

        try {   
            $part->save();

            return redirect()->route('estimates.showOneEstimate', $id)->with('success', __('Pomyślnie dodano części do kosztorysu'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('parts.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('parts.index')->with('error', __('Błąd podczas dodawania części!'));
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
        $parts = Part::with('estimate')->where('estimate_id',$id)->get();

        return view('parts.index', compact('parts','id'));
    }

    public function partToBuy()     // Metoda zwracająca części, które trzeba zakupić
    {
        $parts = Part::with('estimate')->whereIN('inStock', [0])->get();

        return view('parts.partToBuy', compact('parts'));
    }

    public function countPartToBuy()
    {
        $parts = Part::with('estimate')->whereIN('inStock', [0])->get();
        $parts = count($parts);

        return response()->json($parts);
    }

    public function orderedPart($id){
        $parts = Part::findOrFail($id);
        $parts->estimate->order->status_id = 6;
        $parts->inStock = 1;

        try {
            $parts->estimate->order->save();
            $parts->save(); 
        return redirect()->route('parts.partToBuy')->with('success', __('Część została zamówiona oraz zmieniono status zlecenia'));
        }catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('parts.partToBuy')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('parts.partToBuy')->with('error', __('Błąd podczas zamawiania części'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $part = Part::with('category')->findOrFail($id);
        $edit = true;

        return view('parts.form', compact('part', 'edit','categories','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartRequest $request, $id)
    {
        $part = Part::findOrFail($id);

        $part->$id;
        $part->name = $request->input('nazwa');
        $part->category_id = $request->input('kategoria');
        $part->amount = $request->input('ilość');
        $part->price = $request->input('cena');
        $part->inStock = $request->has('stanMagazynowy');

        $part->save();

        $newID = $part->estimate->id;

        return redirect()->route('parts.show', $newID)->with('success', __('Pomyślnie zaaktualizowano listę części'));
    }

    public function generatePDFforParts($id)
    {
        $data = Part::with('estimate')->where('estimate_id',$id)->get();
       
        view()->share('part',$data);
        $pdf = PDF::loadView('parts/partsPDF', $data);

        return $pdf->download('czesci.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part = Part::findOrFail($id);
        $idKosztorysu = $part->estimate_id;
        $part->delete();

        return redirect()->route('estimates.showOneEstimate', $idKosztorysu)->with('success', __('Pomyślnie usunięto część z listy'));
    }
}
