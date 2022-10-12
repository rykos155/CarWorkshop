@extends('layouts.app')

@section('content')

<div class="container-fluid p-4 w-75 rounded-3" style="background-color: #2E2E2E; box-shadow: 6px 6px 19px black;">
    <div class="row justify-content-between align-items-center">
        <div class="col-2">
            <a href="{{ route('clients.index') }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj 
            </a>
        </div>
        <div class="col-10" style="text-align: right">
            <h1 class="display-5">
                @if(isset($edit) && $edit === true)
                    Edycja pojazdu {{ $car->brand->brand }} {{ $car->carmodel->model }}
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    Dodanie pojazdu dla 
                    {{ $client->name }} {{ $client->surname }} 
                @endif
            </h1>
        </div>     
    </div>      
    <br>
    <div class="row justify-content-center align-items-center">
        <div class="col-auto">
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
        <form id="car-form" method="post"
            @if(isset($edit) && $edit === true)
                action="{{ route('cars.update', $car->id) }}"
            @else
                action="{{ route('cars.store', $id) }}"
            @endif
        >
            @if(isset($edit) && $edit === true)
                @method('PATCH')
            @endif
            @csrf

    <hr>
    <div class="row align-items-center">
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="brand_id">
                    Marka *
                </label>
                @if($edit == true)
                    <select class="form-select custom-select" name="marka" id="marka">
                        @foreach ($brands as $brand)
                            @if($car->brand->brand == $brand->brand )
                                <option value="{{ $brand->id }}"  selected="selected">{{ $brand->brand }} </option>
                            @else
                                <option value="{{ $brand->id }}">{{ $brand->brand }} </option>
                            @endif
                        @endforeach
                    </select>
                @else
                    <select class="form-select custom-select" name="marka" id="marka">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                                @if(isset($car->brand_id)
                                    && $car->brand_id === $brand -> brand_id)
                                    selected
                                @elseif(old('brand_id')
                                    && old('brand_id') === $brand -> brand_id)
                                    selected   
                                @endif
                                >{{ $brand->brand }} 
                            </option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="model_id">
                    Model *
                </label>
                @if($edit == true)
                    <select class="form-select custom-select" name="model" id="model">
                        @foreach ($carmodels as $carmodel)
                            @if($car->carmodel->model == $carmodel->model )
                                <option value="{{ $carmodel->id }}"  selected="selected">{{ $carmodel->model }}  </option>
                            @else
                                <option value="{{ $carmodel->id }}">{{ $carmodel->model }}  </option>
                            @endif
                        @endforeach
                    </select>
                @else
                    <select class="form-select custom-select" name="model" id="model">
                        @foreach ($carmodels as $carmodel)
                            <option value="{{ $carmodel->id }}"
                                @if(isset($car->model_id)
                                    && $car->model_id === $carmodel -> model_id)
                                    selected
                                @elseif(old('model_id')
                                    && old('model_id') === $carmodel -> model_id)
                                    selected   
                                @endif
                                >{{ $carmodel->model }} 
                            </option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>   
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="registrationNumber">
                    Tablica rejestracyjna
                </label>
                <input type="text"
                    class="form-control"
                    name="rejestracja"
                    @if(isset($car->registrationNumber))
                        value="{{ $car->registrationNumber }}"
                    @else
                        value="{{ old('registrationNumber') }}"
                    @endif
                />
            </div>
        </div> 
    </div>
    <br>
    <div class="row align-items-center">
        <div class="col-2  offset-2">
            <div class="form-group">
                <label for="generation">
                    Generacja
                </label>
                <input type="text"
                    class="form-control"
                    name="generacja"
                    @if(isset($car->generation))
                        value="{{ $car->generation }}"
                    @else
                        value="{{ old('generation') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="productionYear">
                    Rok produkcji *
                </label>
                <input type="number"
                    min="1950"
                    max="2050"
                    step="1"
                    value="2010"
                    class="form-control"
                    name="rokProdukcji"
                    @if(isset($car->productionYear))
                        value="{{ $car->productionYear }}"
                    @else
                        value="{{ old('productionYear') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="color">
                    Kolor
                </label>
                <input type="text"
                    class="form-control"
                    name="kolor"
                    @if(isset($car->color))
                        value="{{ $car->color }}"
                    @else
                        value="{{ old('color') }}"
                    @endif
                />
            </div>
        </div>
    </div>
    <br>
    <div class="row align-items-center">
        <div class="col-4  offset-2">
            <div class="form-group">
                <label for="VIN">
                    VIN *
                </label>
                <input type="text"
                    class="form-control"
                    name="vin"
                    @if(isset($car->VIN))
                        value="{{ $car->VIN }}"
                    @else
                        value="{{ old('VIN') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="type">
                    Typ nadwozia *
                </label>               
                <select class="form-select custom-select" name="typNadwozia">                
                    <option> Kompakt </option>
                    <option> Sedan</option>
                    <option> Kombi </option>
                    <option> Minivan </option>
                    <option> SUV </option>
                    <option> Kabriolet </option>
                    <option> Coupe </option>                       
                </select> 
            </div>
        </div>
    </div>
    <br><hr><br>  
    <div class="row justify-content-center">   
        <div class="col-2">
            <div class="form-group">
                <label for="enginePower">
                    Moc silnika *
                </label>
                <input type="text"
                    class="form-control"
                    name="moc"
                    @if(isset($car->enginePower))
                        value="{{ $car->enginePower }}"
                    @else
                        value="{{ old('enginePower') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="mileage">
                    Stan licznika
                </label>
                <input type="text"
                    class="form-control"
                    name="przebieg"
                    @if(isset($car->mileage))
                        value="{{ $car->mileage }}"
                    @else
                        value="{{ old('mileage') }}"
                    @endif
                />
            </div>
        </div>    
    </div>
    <br>
    <div class="row justify-content-center">   
        <div class="col-2">
            <div class="form-group">
                <label for="engineType">
                    Rodzaj silnika *
                </label>
                <select class="form-select custom-select" name="rodzajSilnika">
                        <option> Benzyna </option>
                        <option> Benzyna + LPG</option>
                        <option> Diesel </option>
                        <option> Elektryk </option>
                        <option> Hybryda </option>
                        <option> Wodór </option>
                        <option> Etanol </option>
                </select> 
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="engineCapacity">
                    Pojemność silnika *
                </label>
                <input type="text"
                    class="form-control"
                    name="pojemnosc"
                    @if(isset($car->engineCapacity))
                        value="{{ $car->engineCapacity }}"
                    @else
                        value="{{ old('engineCapacity') }}"
                    @endif
                />
            </div> 
        </div>
        <div class="col-2 offset-md-10"> 
            <button type="submit" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                @if(isset($edit) && $edit === true)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                        <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                    </svg>
                    Zapisz
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                    Dodaj
                @endif
            </button>
        </div>
    </div>
    <br>
    <div class="row align-items-right">
            <div class="col-2 offset-10">
                <h6>* Pole jest wymagane</h6>
            </div>
        </div>
    </form>
</div>

@endsection

@section('js-scripts')

{{-- Laravel Javascript Validation --}}
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {{-- Walidacja po stronie klienta z użyciem reguł walidacji po stronie serwera --}}
    @if(isset($edit) && $edit === true)
        {!! JsValidator::formRequest('App\Http\Requests\Cars\StoreCarRequest', '#car-form'); !!}
    @else
        {!! JsValidator::formRequest('App\Http\Requests\Cars\UpdateCarRequest', '#car-form'); !!}
    @endif

    
    <script>
        $(function(){
            $('#marka').change(function(){
                $("#model option").remove();
                var id=$(this).val();
                var url='{{ route('carmodels.getModels',':id') }}' ;
                url = url.replace(':id',id);
                $.ajax({
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    type: 'get',
                    dataType: 'json',
                    success: function(result){
                        $.each(result, function(k,v){
                            $('#model').append($('<option>',{value:k,text:v}));
                        });
                    },
                    error: function(){
                        console.log("Błąd w odczycie");
                    }
                })
            })
        })
    </script>
@endsection

