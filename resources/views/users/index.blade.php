@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<div class="container-fluid">  
    <hr>
    <div class="row justify-content-between align-items-center" >
        <div class="col-5 offset-md-1"> 
            <h1 class="display-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>    
            Lista użytkowników</h1>
        </div>
        <div class="col-2">
            <div class="text-right">
                <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('users.create')}}" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                    Dodaj nowego użytkownika
                </a>
            </div>
        </div>
    </div>       
        <hr>
        <br>        
    <div class="row">
        <div class="col-sm-12">
            <table id="client-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Imię Nazwisko / Mail</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
    <tbody style="text-align:center">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    @foreach ($users as $user) 
                        <tr>
                            <td>    
                                <p style="font-size: 20px;"><strong> {{ $user->name }} {{ $user->surname }} </strong></p>
                                <p> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                    </svg>    
                                        {{ $user->email }} 
                                </p>
                            </td>
                            <td width="220" class="align-middle">                               
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"> 
                                    <a type="button" class="btn btn-dark" href="{{ route('users.edit' ,$user->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('users.changePasswordView' ,$user->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                    </a>
                                    <!-- <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#listOfusers{{$user->id}}"> 
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </a>

                                    <div class="modal fade" id="listOfusers{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="listOfusersModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="listOfusersModalLabel">Czy napewno chcesz usunąć użytkownika?</h3>
                                                    <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <br>
                                                <div class="modal-body">
                                                    <h5>{{$user->name}} {{$user->surname}}<br></h5>
                                                </div>
                                                <hr><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <form action="{{ route('users.destroy' ,$user->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    Usuń
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                                    </svg>
                                                                </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>       
                        </tr>
                        </div>
                    </div>
                    @endforeach             
                </div>
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection

@section('js-scripts')
<script>
        $(document).ready(function() {
            $('#client-table').DataTable({
                
                dom: 'Bfrtip',
                buttons: [
                    'colvis', 'pageLength'
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pl.json'
                }
            });
        } );
    </script>
@endsection