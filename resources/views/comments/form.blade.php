@extends('layouts.app')

@section('content')

<div class="container-fluid w-50 p-4 rounded-3" style="background-color: #2E2E2E; box-shadow: 6px 6px 19px black;">
    <div class="row align-items-center">
        <div class="col-2 ">
            <a href="{{ route('cars.index') }}" type="button" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Anuluj 
            </a>
        </div>
        <div class="col-8 offset-2">
            <h1 class="display-4">
                Edycja komentarza
            </h1>
        </div>     
    </div>      
    <hr><br>

    <div class="row justify-content-center">
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
        <form id="comment-form" method="post"
                action="{{ route('comments.update', $comment->id) }}"
        >
                @method('PATCH')
            @csrf

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="form-group">
                <label for="text">
                    Komentarz
                </label>
                <textarea type="textarea"
                    class="form-control"
                    cols=120
                    name="komentarz"
                    @if(isset($comment->text))
                        value="{{ $comment->text }}"
                    @else
                        value="{{ old('text') }}"
                    @endif
                />
                {{ $comment->text }}
                </textarea>
            </div>  
        </div>
    </div>    
    <br><br>
    <div class="row justify-content-center">
        <div class="col-2 offset-1"> 
            <button type="submit" class="btn" style="background-color: #141414; box-shadow: 6px 6px 19px black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                    <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293V1.5z"/>
                </svg>
                Zapisz
            </button>
        </div>
    </div>
    </form>
</div>

@endsection

