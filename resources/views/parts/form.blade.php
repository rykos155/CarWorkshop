@extends('layouts.app')

@section('content')
<div class="container p-4 rounded-3" style="background-color: #2E2E2E; box-shadow: 6px 6px 19px black;">
    <div class="row justify-content-start">
        <div class="col-auto align-self-center">
            <a href="{{ route('parts.show', $id) }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj
            </a>
        </div>
        <div class="col-auto align-self-center">
            <a href="{{ route('estimates.showOneEstimate', $id) }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Kosztorys 
            </a>
        </div>
        <div class="col-auto offset-2">
            <h1 class="display-3">
                @if(isset($edit) && $edit === true)
                    Edycja części
                @else
                    Nowe części do listy
                @endif
            </h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
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
       
    <form id="warehouse-form" method="post"
        @if(isset($edit) && $edit === true)
            action="{{ route('parts.update', $part->id) }}"
        @else
            action="{{ route('parts.store', $estimates->id) }}"
        @endif
    >
        @if(isset($edit) && $edit === true)
            @method('PATCH')
        @endif
        @csrf
                
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="form-group">
                <label for="name">
                    Nazwa *
                </label>
                <input type="text"
                    class="form-control"
                    name="nazwa"
                    @if(isset($part->name))
                        value="{{ $part->name }}"
                    @else
                        value="{{ old('name') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="category_id">
                    Kategoria *
                </label>
                <select class="form-select custom-select" name="kategoria">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @if(isset($part->category_id)
                            && $part->category_id === $category->id)
                            selected
                            value="{{ $part->category->name}}"
                        @elseif(old('category_id')
                            && old('category_id') === $category->id)
                            selected   
                            value="{{old('catgory_id')}}"
                        @endif
                        >{{ $category->name }} 
                    </option>
                @endforeach
                </select> 
            </div>
        </div>
    </div>
    <br><br>            
    <div class="row justify-content-center">
        <div class="col-1">
            <div class="form-group">
                <label for="amount">
                    Ilość *
                </label>
                <input type="text"
                    class="form-control"
                    name="ilość"
                    @if(isset($part->amount))
                        value="{{ $part->amount }}"
                    @else
                        value="{{ old('amount') }}"
                    @endif
                />
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label for="price">
                    Cena łączna *
                </label>
                <input type="text"
                    class="form-control"
                    name="cena"
                    @if(isset($part->price))
                        value="{{ $part->price }}"
                    @else
                        value="{{ old('price') }}"
                    @endif
                />
            </div>
        </div>
    </div>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-auto">  
            @if($edit == true)
                <div class="form-check form-switch ms-3">
                    @if($part->inStock == 1)
                        <input class="form-check-input" type="checkbox" name="stanMagazynowy" id="inStock" checked>
                    @else
                        <input class="form-check-input" type="checkbox" name="stanMagazynowy" id="inStock">
                    @endif
                    <label class="form-check-label" for="stanMagazynowy">Czy część znajduje się w magazynie</label>
                </div>
            @else
                <div class="form-check form-switch ms-3">
                    <input class="form-check-input" type="checkbox" name="stanMagazynowy" id="inStock">
                    <label class="form-check-label" for="stanMagazynowy">Czy część znajduje się w magazynie</label>
                </div>
            @endif
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
                    Dodaj części
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
        {!! JsValidator::formRequest('App\Http\Requests\Parts\StorePartRequest', '#part-form'); !!}
    @else
        {!! JsValidator::formRequest('App\Http\Requests\Parts\UpdatePartRequest', '#part-form'); !!}
    @endif
@endsection