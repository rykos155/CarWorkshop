<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Estimate;
use App\Models\Client;
use App\Models\Car;
use App\Models\Part;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Estimates\StoreEstimateRequest;
use App\Http\Requests\Estimates\UpdateEstimateRequest;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class EstimateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimates = Estimate::with('order','part','user')->get();
        $text = "";

        return view('estimates.index', compact('estimates','text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $orders = Order::all();
        $parts = Part::all();
        $users = User::all();
        $orders = Order::all();

        return view('estimates.form', compact('orders','parts','users','orders','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $estimate = new Estimate([
            'order_id' => $id,
            'user_id' => Auth::id(),
            'isSend' => $request->has('isSend') == 1,
        ]);

        dd($estimate);

        try {
            $estimate->save();
            return redirect()->route('estimates.index')->with('success', __('Pomyślnie stworzono nowy kosztorys.'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('estimates.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('estimates.index')->with('error', __('Błąd utworzenia kosztorysu!'));
            }
        }
    }

    public function instantCreate(Request $request, $id)
    {
        $estimate = new Estimate([
            'order_id' => $id,
            'user_id' => Auth::id(),
            'isSend' => false,
        ]);

        try {
            $estimate->save();
            return redirect()->route('estimates.showOneEstimate', $estimate->id)->with('success', __('Pomyślnie stworzono nowy kosztorys.'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('estimates.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('estimates.index')->with('error', __('Błąd utworzenia kosztorysu!'));
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
        $estimates = Estimate::with('order','user')->where('order_id',$id)->get();
        $text = " dla wybranego zlecenia";

        return view('estimates.index', compact('estimates','id','text'));
    }

    public function showOneEstimate($id)
    {
        $estimates = Estimate::with('order','user')->where('id',$id)->get();
        $text = "";

        return view('estimates.index', compact('estimates','id','text'));
    }


    public function generatePDFforEstimate($id)
    {
        $data = Estimate::with('part','service')->whereIn('id',[$id])->get();
        
        $estimate = Estimate::findOrFail($id);
        $imie = $estimate->order->car->client->name;
        $nazwisko = $estimate->order->car->client->surname;

        view()->share('estimate',$data);


        $pdf = PDF::loadView('estimates/estimatesPDF', $data);

        return $pdf->download("kosztorys_$imie-$nazwisko.pdf");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estimate = Estimate::with('part','service')->findOrFail($id);
        $partToDelete = "";
        $serviceToDelete = "";       

        try {
            foreach($estimate->part as $partToDelete)
            {    
                $partToDelete->delete();
            }

            foreach($estimate->service as $serviceToDelete)
            {    
                $serviceToDelete->delete();
            }

            $estimate->delete();
            
            return redirect()->route('estimates.index')->with('success', __('Pomyślnie usunięto części, usługi oraz kosztorys.'));
            } catch (\Illuminate\Database\QueryException $e) {
                \Log::error($e);
    
                switch ($e->getCode()) {
                    case '23000':
                        return redirect()->route('estimates.index')->with('error', __('Błąd duplikacji danych!'));
                        break;
                    default:
                        return redirect()->route('estimates.index')->with('error', __('Błąd podczas usuwania danych!'));
                }
            }
    }
}
