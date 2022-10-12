@extends('layouts.app')

@section('content')
<div class="container p-4" style="background-color: #2E2E2E; border-radius: 10px; box-shadow: 6px 6px 19px #182019;">
    <div class="row justify-content-between">
        <div class="col-2 align-self-center">
            <a href="{{ route('users.index') }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj 
            </a>
        </div>
        <div class="col-9">
            <h1 class="display-5">
                @if(isset($edit) && $edit === true)
                    Edycja danych użytkownika
                @else
                    <h2 class="display-4">Stworzenie nowego użytkownika</h2>      
                @endif
            </h1>
        </div>     
    </div>    

    <div class="row justify-content-center">
        <div class="col-auto align-self-center">
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
    <form id="user-form" method="post"
        @if(isset($edit) && $edit === true)
            action="{{ route('users.update', $user->id) }}"
        @else
            action="{{ route('users.store') }}"
        @endif
    >
        @if(isset($edit) && $edit === true)
            @method('PATCH')
        @endif
        @csrf
    <hr><br>

    <div class="row justify-content-center">
        <div class="col-3">
            <div class="form-group">
                <label for="name">
                    Imię *
                </label>
                <input type="text"
                    class="form-control"
                    name="imię"
                    @if(isset($user->name))
                        value="{{ $user->name }}"
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
                    @if(isset($user->surname))
                        value="{{ $user->surname }}"
                    @else
                        value="{{ old('surname') }}"
                    @endif
                />
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="form-group">
                <label for="email">
                    E-mail *
                </label>
                <input type="text"
                    class="form-control"
                    name="email"
                    @if(isset($user->email))
                        value="{{ $user->email }}"
                    @else
                        value="{{ old('email') }}"
                    @endif
                />
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="form-group">
                <label for="password">
                    Hasło *
                </label>
                <input type="text"
                    class="form-control"
                    name="hasło"
                />
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="confirmPassword">
                    Potwierdź Hasło *
                </label>
                <input type="text"
                    class="form-control"
                    name="potwierdźHasło"
                />
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
        <div class="col-auto">
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
                    Dodaj użytkownika
                @endif
            </button>
        </div>
    </div>
    </form>
@endsection