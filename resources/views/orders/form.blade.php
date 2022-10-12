@extends('layouts.app')

@section('content')

<div class="container p-4" style="background-color: #2E2E2E; border-radius: 10px; box-shadow: 6px 6px 19px #182019;">
    <div class="row justify-content-between align-items-center">
        <div class="col align-self-center">
            <a href="{{ route('cars.showOneCar', $id) }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj 
            </a>
        </div>
        <div class="col-9">
            <h1 class="display-6">
                @if($edit === true)
                    Edycja zlecenia dla pojazdu {{ $order->car->brand->brand}} {{ $order->car->carmodel->model}}
                @else
                    Dodanie zlecenia dla pojazdu {{ $car->brand->brand}} {{ $car->carmodel->model}}
                @endif
            </h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <br>       
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <form id="order-form" method="post"
        @if(isset($edit) && $edit === true)
            action="{{ route('orders.update', $order->id) }}"
        @else
            action="{{ route('orders.store', $id) }}"
        @endif
    >
        @if(isset($edit) && $edit === true)
            @method('PATCH')
        @endif
        @csrf

    <hr><br>
    <div class="row align-items-center">
        <div class="col-md-2">
            <div class="form-group">
                <label for="status_id">
                    Status *
                </label>
                @if($edit == true)
                    <select class="form-select custom-select" name="status_id">
                        @foreach ($statuses as $status)
                            @if($order->status->status == $status->status)
                                <option value="{{ $status->id }}"  selected="selected">{{ $status->status }}</option>
                            @else
                                <option value="{{ $status->id }}">{{ $status->status }}</option>
                            @endif
                        @endforeach
                    </select>
                @else
                    <select class="form-select custom-select" name="status_id">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->id }}"
                                @if(isset($client->status_id)
                                    && $client->status_id === $status -> status_id)
                                    selected
                                    value="{{ $client->status_id }}"
                                @elseif(old('status_id')
                                    && old('status_id') === $status -> status_id)
                                    selected   
                                    value="{{ old('status_id') }}"
                                @endif
                                >{{ $status->status }} </option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <label for="description">
                    Uwagi klienta dotyczące pojazdu *
                </label>
                <textarea type="text"
                    class="form-control"
                    name="description"
                    id="description"
                >
                    @if($edit == true)
                        {{ $order->description }}
                    @endif
                </textarea> 
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="form-group">
                <label for="startDate">
                    Data rozpoczęcia zlecenia *
                </label>
                @if($edit == false)
                    <input class="form-control datepicker"
                        data-date-format="yyyy-mm-dd"
                        name="startDate" 
                        type="date" 
                        id="start"
                        min="2021-01-01"
                        placeholder="YYYY-mm-dd"
                    />
                @else
                    <input class="form-control datepicker"
                        data-date-format="yyyy-mm-dd"
                        name="startDate" 
                        type="date" 
                        id="startDate"
                        min="2021-01-01"
                        placeholder="YYYY-mm-dd"
                        value="{{$order->startDate}}"
                    />
                @endif
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="endDate">
                    Data ukończenia zlecenia *
                </label>
                @if($edit == false)
                    <input class="form-control"
                        name="endDate" 
                        type="date" 
                        id="end"
                        min="2021-01-01"
                    />
                @else
                    <input class="form-control"
                        name="endDate" 
                        type="date" 
                        id="endDate"
                        min="2021-01-01"
                        value="{{$order->endDate}}"
                    />
                @endif
            </div>
        </div>   
    </div>
    <div class="row justify-content-end">
        <div class="col-2 offset-2">
            <h6>* Pole jest wymagane</h6>
        </div>  
    </div>  
    <br><hr><br>
    <div class="row justify-content-center">
        <div class="col-2">
            <button type="submit" class="btn btn-success" style="box-shadow: 6px 6px 19px #182019;">
                @if(isset($edit) && $edit === true)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                        <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                    </svg>
                    Zapisz
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                    Dodaj zlecenie
                @endif
            </button>
        </div>
    </div>
    </form>
</div>
@endsection

@section('js-scripts')
    <script>
        $(document).ready(function(){
            var data = (new Date()).toISOString().split('T')[0];
            $('#start').val(data);
            console.log(data);
        });
    </script>
    <script>
        $(document).ready(function(){
            var data = (new Date()).toISOString().split('T')[0];
            $('#end').val(data);
            console.log(data);
        });
    </script>

    {{-- Laravel Javascript Validation --}}
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {{-- Walidacja po stronie klienta z użyciem reguł walidacji po stronie serwera --}}
    @if(isset($edit) && $edit === true)
        {!! JsValidator::formRequest('App\Http\Requests\Orders\StoreOrderRequest', '#order-form'); !!}
    @else
        {!! JsValidator::formRequest('App\Http\Requests\Orders\UpdateOrderRequest', '#order-form'); !!}
    @endif

@endsection