@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>  
<div class="container-fluid">  
    <div class="row justify-content-between align-items-center" >
        <div class="col-sm-7 offset-md-1"> 
            <h1 class="display-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>    
                @if($view == false) 
                    Lista aktywnych klientów
                @else
                    Lista zablokowanych klientów
                @endif 
            </h1>
        </div>
        <div class="col-sm-4">
            <div class="text-right">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example"> 
                    <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('clients.create')}}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                            Dodaj nowego klienta
                    </a>
                    @if($view == false)              
                        <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('clients.softDeleteClients')}}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Pokaż zablokowanych klientów
                        </a>
                    @else
                        <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('clients.index')}}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            Pokaż aktywnych klientów
                        </a>
                    @endif  
                </div>
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
                    <th>Telefon</th>   
                    <th>Pojazdy</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
        <tbody style="text-align:center">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    @foreach ($clients as $client) 
                        <tr>
                            <td>    
                                <p style="font-size: 20px;"><strong> {{ $client->name }} {{ $client->surname }} </strong></p>
                                <p> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>    
                                    {{ $client->email }} 
                                </p>
                            </td>
                            <td class="align-middle" style="font-size: 16px;">               
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg> 
                                    {{ $client->phoneNumber }}
                            </td>
                            <td width="300" class="align-middle">
                                <div class="btn-group " role="group" aria-label="Basic mixed styles example"> 
                                    @if($view == false)
                                        <a type="button" class="btn btn-secondary" href="{{ route('cars.create' ,$client->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                            </svg>
                                            Dodaj
                                        </a>
                                    @endif
                                    @if($client->car->count()!=0)
                                    <a type="button" class="btn btn-secondary" href="{{ route('cars.show', $client->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                                            <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
                                        </svg>
                                        Lista
                                    </a>
                                    @endif
                                </div>
                            </td>
                            <td width="220" class="align-middle">                               
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"> 
                                    <a type="button" class="btn btn-dark" href="{{ route('clients.edit' ,$client->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                    @if($view == false)              
                                        <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#client{{ $client->id}}"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                                <path d="M7.5 1v7h1V1h-1z"/>
                                                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#client{{ $client->id}}"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                            </svg>
                                        </a>
                                    @endif  
                                                             
                                    <div class="modal fade" id="client{{ $client->id}}" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="clientModalLabel">Czy napewno chcesz zablokować klienta?</h5>
                                                    <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row align-items-end justify-content-center">
                                                            <div class="col-auto">
                                                                <h5>{{ $client->name }} {{ $client->surname }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <div class="container">
                                                        <div class="row align-items-center justify-content-center">
                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    ANULUJ
                                                                </button>
                                                            </div>
                                                            <div class="col-auto">
                                                                @if($view == false)   
                                                                    <a type="button" class="btn btn-danger" href="{{ route('clients.ban' ,$client->id) }}">
                                                                        ZABLOKUJ
                                                                    </a>
                                                                @else
                                                                    <a type="button" class="btn btn-success" href="{{ route('clients.restore' ,$client->id) }}">
                                                                        ODBLOKUJ
                                                                    </a> 
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-dark" href="{{ route('clients.show' ,$client->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
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
