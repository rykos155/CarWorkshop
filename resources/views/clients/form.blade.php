@extends('layouts.app')

@section('content')
<div class="container p-4 rounded-3" style="background-color: #2E2E2E; box-shadow: 6px 6px 19px black;">
    <div class="row justify-content-between">
        <div class="col align-self-center">
            <a href="{{ route('clients.index') }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj 
            </a>
        </div>
        <div class="col">
            <h1 class="display-3">
                @if(isset($edit) && $edit === true)
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Edycja klienta
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Nowy klient
                @endif
            </h1>
        </div>     
    </div>      
                
    <div class="row align-items-center justify-content-center">
        <div class="col-md-4">
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

    <form id="client-form" method="post"
        @if(isset($edit) && $edit === true)
            action="{{ route('clients.update', $client->id) }}"
        @else
            action="{{ route('clients.store') }}"
        @endif
    >
        @if(isset($edit) && $edit === true)
            @method('PATCH')
        @endif
        @csrf
    <hr><br>
    <div class="row align-items-center">
        <div class="col-3">
            <div class="form-group">
                <label for="name">
                    Imię *
                </label>
                <input type="text"
                    class="form-control"
                    name="imię"
                    @if(isset($client->name))
                        value="{{ $client->name }}"
                    @else
                        value="{{ old('name') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="surname">
                    Nazwisko *
                </label>
                <input type="text"
                    class="form-control"
                    name="nazwisko"
                    @if(isset($client->surname))
                        value="{{ $client->surname }}"
                    @else
                        value="{{ old('surname') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-5 offset-1">
            <div class="form-group">
                <label for="email">
                    E-mail *
                </label>
                <input type="text"
                    class="form-control"
                    name="email"
                    @if(isset($client->email))
                        value="{{ $client->email }}"
                    @else
                        value="{{ old('email') }}"
                    @endif
                />
            </div>
        </div>
    </div>  
    <br>
    <div class="row align-items-center">
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="pesel">
                    Pesel
                </label>
                <input type="text"
                    class="form-control"
                    name="pesel"
                    @if(isset($client->pesel))
                        value="{{ $client->pesel }}"
                    @else
                        value="{{ old('pesel') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-5 offset-3">
            <div class="form-group">
                <label for="phoneNumber">
                    Numer telefonu *
                </label>
                <input type="text"
                    class="form-control"
                    name="telefon"
                    @if(isset($client->phoneNumber))
                        value="{{ $client->phoneNumber }}"
                    @else
                        value="{{ old('phoneNumber') }}"
                    @endif
                />
            </div>
        </div>
    </div>  
    <br><hr><br>
    <div class="row">
        <div class="col-3 offset-1">
            <div class="form-group">
                <label for="home">
                    Adres
                </label>
                <input type="text"
                    class="form-control"
                    name="miejsceZamieszkania"
                    @if(isset($client->home))
                        value="{{ $client->home }}"
                    @else
                        value="{{ old('home') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-3 offset-3">
            <div class="form-group">
                <label for="province_id">
                    Województwo
                </label>
                <select class="form-select custom-select" name="wojewodztwo">
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}"
                            @if(isset($client->province_id)
                                && $client->province_id === $province->id)
                                selected
                                value="{{ $client->province->provinceName }}"
                            @elseif(old('province_id')
                                && old('province_id') === $province->id)
                                selected   
                                value="{{ old('province_id') }}"
                            @endif
                            >{{ $province->provinceName }} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3 offset-1">
            <div class="form-group">
                <label for="street">
                    Ulica
                </label>
                <input type="text"
                    class="form-control"
                    name="ulica"
                    @if(isset($client->street))
                        value="{{ $client->street }}"
                    @else
                        value="{{ old('street') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2 offset-2">
            <div class="form-group">
                <label for="zipCode">
                    Kod pocztowy
                </label>
                <input type="text"
                    class="form-control"
                    name="kodPocztowy"
                    @if(isset($client->zipCode))
                        value="{{ $client->zipCode }}"
                    @else
                        value="{{ old('zipCode') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="commune">
                    Gmina
                </label>
                <input type="text"
                    class="form-control"
                    name="gmina"
                    @if(isset($client->commune))
                        value="{{ $client->commune }}"
                    @else
                        value="{{ old('commune') }}"
                    @endif
                />
            </div>
        </div>
    </div>   
    <br>
    <div class="row align-items-center">
        <div class="col-1 offset-1">
            <div class="form-group">
                <label for="houseNumber">
                    Nr domu
                </label>
                <input type="text"
                    class="form-control"
                    name="numerDomu"
                    @if(isset($client->houseNumber))
                        value="{{ $client->houseNumber }}"
                    @else
                        value="{{ old('houseNumber') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-1 offset-1">
            <div class="form-group">
                <label for="flatNumber">
                    Mieszkanie
                </label>
                <input type="text"
                    class="form-control"
                    name="mieszkanie"
                    @if(isset($client->flatNumber))
                        value="{{ $client->flatNumber }}"
                    @else
                        value="{{ old('flatNumber') }}"
                    @endif
                />
            </div>
        </div>
    </div>   
    <div class="row align-items-right">
        <div class="col-2 offset-10">
            <h6>* Pole jest wymagane</h6>
        </div>
    </div>
    <br><hr><br>
    <div class="row align-items-center justify-content-center">
        <div class="col-auto">
            <button type="submit" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                @if(isset($edit) && $edit === true)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                        <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                    </svg>
                    Zapisz
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                    Dodaj klienta
                @endif
            </button>
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
        {!! JsValidator::formRequest('App\Http\Requests\Clients\StoreClientRequest', '#client-form'); !!}
    @else
        {!! JsValidator::formRequest('App\Http\Requests\Clients\UpdateClientRequest', '#client-form'); !!}
    @endif
@endsection