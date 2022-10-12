@extends('layouts.app')

@section('content')

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem; box-shadow: 6px 6px 19px #182019;">
                <div class="card-body p-5 text-center">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf  
                        <div class="mb-md-5 mt-md-4 pb-5">

                        <h2 class="fw-bold mb-2 text-uppercase">{{ __('Logowanie') }}</h2>
                        <p class="text-white-50 mb-5">Wpisz dane logowania!</p>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adres E-mail') }}</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <label class="form-check-label" for="remember">
                                                {{ __('Zapamiętaj mnie') }}
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-auto align-self-center">
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">
                                        {{ __('Zaloguj') }}
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
