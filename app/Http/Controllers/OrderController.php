<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Order;
use App\Models\Car;
use App\Models\Estimate;
use App\Models\Status;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Orders\StoreOrderRequest;
use App\Http\Requests\Orders\UpdateOrderRequest;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::with('car','estimate','status','user')->get();
        $orderList = true;
        $title = "";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $statuses = Status::all();
        $users = User::all();
        $car = Car::with('brand','carmodel')->find($id);
        $edit = false;
        $title = "";

        return view('orders.form', compact('statuses','car','users','id','edit','title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request, $id)
    {
        $order = new Order([
            'car_id' => $id,
            'status_id' => $request->input('status_id'),
            'user_id' => Auth::id(),
            'startDate' => $request->input('startDate'),
            'endDate' => $request->input('endDate'),
            'description' => $request->input('description'),
        ]);

        try {
            $order->save();
            $newID = $order->id;

            return redirect()->route('orders.showOneOrder',$newID)->with('success', __('Pomyślnie stworzono nowe zlecenie.'));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('orders.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('orders.index')->with('error', __('Błąd podczas dodawania nowego zlecenia!'));
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
        $orders = Order::with('car','estimate','status','user')->where('car_id', $id)->get();
        $orderList = false;
        foreach($orders->take(1) as $order){
            $marka = $order->car->brand->brand;
            $model = $order->car->carmodel->model;
        }
        $title = " dla pojazdu " . $marka . " " . $model ;
        $carHistory = true;

        return view('orders.index', compact('orders','id','orderList','title','carHistory'));
    }

    public function showOneOrder($id)    // METODA ZWRACAJĄCA KONKRETNE ZLECENIE
    {
        $orders = Order::with('car','estimate','status','user')->where('id', $id)->get();
        $orderList = false;
        $title = "";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function showActiveOrders()    // METODA ZWRACAJĄCA ZLECENIA AKTYWNE
    {
        $orders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->get();
        $orderList = true;
        $title = " aktywnych";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function showPriorityOrders()    // METODA ZWRACAJĄCA PRIORYTETOWE ZLECENIA
    {
        $orders = Order::with('car','estimate','status','user')->whereIn('status_id',['2'])->get();
        $orderList = true;
        $title = " priorytetowych";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function showEndedOrders()   // METODA ZWRACAJĄCA ZAKOŃCZONE ZLECENIA
    {
        $orders = Order::with('car','estimate','status','user')->whereIn('status_id',['4','5'])->get();
        $orderList = true;
        $title = " zakończonych";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function showCar($id)                    // METODA ZWRACAJĄCA WSZYSTKIE ZLECENIA AKTYNWE DLA KONKRETNEGO KLIENTA
    {
        $carids = Car::where('client_id', $id)->pluck('id')->toArray();
        $orders = Order::with('car','estimate','status','user')->whereIn('car_id', $carids)->whereNotIn('status_id',['4','5'])->get();
        $orderList = true;
        $client = Client::findOrFail($id);
        $title = " aktywnych klienta " . $client->name . " " . $client->surname;
        $carHistory = false;

        return view('orders.index', compact('orders','id','orderList','title','carHistory'));
    }
 
    public function showCarHistory($id)           // METODA ZWRACAJĄCA AKTYWNE ZLECENIA DLA WYBRANEGO POJAZDU
    {
        $orders = Order::with('car','estimate','status','user')->where('car_id', $id)->whereNotIn('status_id',['4','5'])->get();
        $orderList = false;
        $car = Car::findOrFail($id);
        $title = " aktywnych dla pojazdu " . $car->brand->brand . " " . $car->carmodel->model;
        $carHistory = false;

        return view('orders.index', compact('orders','id','orderList','title','carHistory'));
    }

    public function showEnded($id)              // METODA ZWRACAJĄCA WSZYSTKIE ZLECENIA ZAKOŃCZONE DLA KONKRETNEGO KLIENTA
    { 
        $carids = Car::where('client_id', $id)->pluck('id')->toArray();
        $orders = Order::with('car','estimate','status','user')->whereIn('car_id', $carids)->whereIn('status_id',['4','5'])->get();
        $orderList = true;
        $client = Client::findOrFail($id);
        $title = " zakończonych klienta " . $client->name . " " . $client->surname;
        $carHistory = false;

        return view('orders.index', compact('orders','id','orderList','title','carHistory'));
    }

    public function showEndedHistory($id)         // METODA ZWRACAJĄCA ZAKOŃCZONE ZLECENIA DLA WYBRANEGO POJAZDU
    {
        $orders = Order::with('car','estimate','status','user')->where('car_id', $id)->whereIn('status_id',['4','5'])->get();
        $orderList = false;
        $car = Car::findOrFail($id);
        $title = " zakończonych dla pojazdu " . $car->brand->brand . " " . $car->carmodel->model;
        $carHistory = false;

        return view('orders.index', compact('orders','id','orderList','title','carHistory'));
    }

    public function showOrdersToday(){        // Metoda zwracająca widok ze zleceniami aktywnymi w dniu dzisiejszym
        $today = getDate();
        $date = $today['year'] . "-" .  $today['mon'] . "-" . $today['mday']; 
        $orders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->whereDate('startDate', '<=' , $date)->whereDate('endDate', '>=' , $date)->get();
        $orderList = true;
        $title = " obecnie trwających";
        $carHistory = false;

        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function countOrdersToday(){   // Metoda zwracająca ilość zleceń aktywnych w dniu dzisiejszym
        $today = getDate();
        $date = $today['year'] . "-" .  $today['mon'] . "-" . $today['mday']; 
        $orders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->whereDate('startDate', '<=' , $date)->whereDate('endDate', '>=' , $date)->get();
        $count = count($orders);

        return response()->json($count);
    }

    public function showOrdersEndToday(){   // Metoda zwracająca widok ze zleceniami kończącymi się w dniu dzisiejszym
        $today = getDate();
        $date = $today['year'] . "-" .  $today['mon'] . "-" . $today['mday']; 
        $orders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->whereDate('endDate', '=' , $date)->get();
        $orderList = true;
        $title = " do zakończenia w dniu dzisiejszym";
        $carHistory = false;
        
        return view('orders.index', compact('orders','orderList','title','carHistory'));
    }

    public function countOrdersEndToday(){   // Metoda zwracająca ilość zleceń kończących się w dniu dzisiejszym
        $today = getDate();
        $date = $today['year'] . "-" .  $today['mon'] . "-" . $today['mday']; 
        $orders = Order::with('car','estimate','status','user')->whereNotIn('status_id',['4','5'])->whereDate('endDate', '=' , $date)->get();
        $count = count($orders);

        return response()->json($count);
    }

    public function getOrders($id)
    {
        $orders = Order::with('car','estimate','status','user')->where('status_id', $id)->get();
        $calendarOrders = array();
        foreach($orders as $order){
            $calendarOrders[] = array(
                'title' => $order->car->client->name ." ". $order->car->client->surname . " | " . $order->car->brand->brand ." ". $order->car->carmodel->model,
                'start'=>$order->startDate,
                'end'=>$order->endDate,
                'id'=>$order->id,
                'idClient'=>$order->car->client->id,
                'idCar'=>$order->car->id,
                'client'=>$order->car->client->name ." ". $order->car->client->surname,
                'car'=>$order->car->brand->brand ." ". $order->car->carmodel->model
            );
        }

        return response()->json($calendarOrders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $statuses= Status::all();
        $order = Order::findOrFail($id);
        $edit = true;
        $title = "";

        return view('orders.form', compact('order', 'edit','statuses','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->status_id = $request->input('status_id');
        $order->startDate = $request->input('startDate');
        $order->endDate = $request->input('endDate');
        $order->description = $request->input('description');

        try {
            $order->save();
            
            return redirect()->route('orders.showOneOrder',$id)->with('success', __('Pomyślnie zaaktualizowano dane dotyczące zlecenia.'));
        }catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            dd($e);
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('orders.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('orders.index')->with('error', __('Błąd podczas edycji danych zlecenia!'));
            }
        }
    }

    public function progressOrder($id)
    {
        $order = Order::findOrFail($id);

        $order->status_id = 7;

        try {
            $order->save();
            
        return redirect()->route('orders.showOneOrder', $id)
            ->with('success', __('Pomyślnie zmieniono status zlecenia na "w realizacji".'));
        }catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.index')
                        ->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('clients.index')
                        ->with('error', __('Błąd podczas edycji danych zlecenia!'));
            }
        }
    }

    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);

        $order->status_id = 4;

        try {
            $order->save();
            
        return redirect()->route('orders.showOneOrder', $id)->with('success', __('Pomyślnie anulowano zlecenie.'));
        }catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('clients.index')->with('error', __('Błąd podczas edycji danych zlecenia!'));
            }
        }
    }

    public function endOrder($id){
        $order = Order::findOrFail($id);

        $order->status_id = 5;

        try {
            $order->save();
            
        return redirect()->route('orders.showOneOrder', $id)->with('success', __('Pomyślnie zakończono zlecenie.'));
        }catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('clients.index')->with('error', __('Błąd zduplikowanych danych!'));
                    break;
                default:
                    return redirect()->route('clients.index')->with('error', __('Błąd podczas edycji danych zlecenia!'));
            }
        }
    }

    public function generatePDFforOrder($id)
    {
        $data = Order::with('car','status')->whereIn('id',[$id])->get();
        
        $order = Order::findOrFail($id);
        $imie = $order->car->client->name;
        $nazwisko = $order->car->client->surname;

        view()->share('order',$data);


        $pdf = PDF::loadView('orders/ordersPDF', $data);

        return $pdf->download("zlecenie_$imie-$nazwisko.pdf");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', __('translation.orders.destroy.messages.success'));
    
    }
}
