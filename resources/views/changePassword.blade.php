@extends('layouts.app')
@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem; box-shadow: 6px 6px 19px #182019;">
                <div class="card-body p-5 text-center">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 

                        <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase">Zmiana hasła</h2>
                        <p class="text-white-50 mb-5">Wpisz stare oraz nowe hasło!</p>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="obecne_hasło" type="password" class="form-control" name="obecne_hasło" autocomplete="obecne-hasło">  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="obecne_hasło" class="col-md-4 col-form-label text-md-right">Obecne hasło</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="nowe_hasło" type="password" class="form-control" name="nowe_hasło" autocomplete="nowe-hasło">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nowe_hasło" class="col-md-4 col-form-label text-md-right">Nowe hasło</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="potwierdź_nowe_hasło" type="password" class="form-control" name="potwierdź_nowe_hasło" autocomplete="potwierdź-nowe-hasło">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="potwierdź_nowe_hasło" class="col-md-4 col-form-label text-md-right">Potwierdź hasło</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="row align-items-center justify-content-center">
                            <div class="col-md-auto align-self-center">
                                    <a href="{{ route('clients.index') }}" class="btn btn-outline-light btn-lg px-5">
                                        Anuluj
                                    </a>
                                </div> 
                                <div class="col-md-auto align-self-center">
                                    <button type="submit" class="btn btn-outline-light btn-lg px-5">
                                        Zmień hasło
                                    </button>
                                </div> 
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection