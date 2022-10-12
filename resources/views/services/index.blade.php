@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>  
<div class="container-fluid">  
    <div class="row justify-content-between align-items-center" >
        <div class="col-sm-4 offset-md-1"> 
            <h1 class="display-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>    
            Lista usług</h1>
        </div>
        <div class="col-sm-2">
            <div class="text-right">
                <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('services.create', $id)}}" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                    Dodaj nową usługę
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
                    <th>Nazwa</th>
                    <th>Cena</th>   
                    <th>Operacje</th>   
                </tr>
            </thead>
        </div>
    </div>  
        <tbody style="text-align:center">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    @foreach ($services as $service) 
                        <tr>
                            <td>    
                                {{ $service->name }} 
                            </td>
                            <td class="align-middle" style="font-size: 16px;">               
                                {{ $service->price }} zł
                            </td>
                            <td width="220" class="align-middle">                               
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example"> 
                                    <a type="button" class="btn btn-dark" href="{{ route('services.edit' ,$service->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('estimates.showOneEstimate' ,$service->estimate->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#destroyService{{ $service->id }}"> 
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </a>
                                
                                    <div class="modal fade" id="destroyService{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="destroyServiceModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="destroyServiceModalLabel">Czy napewno chcesz usunąć usługę?</h3>
                                                    <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <br>
                                                <div class="modal-body">
                                                    <h5><strong>Nazwa usługi:</strong> {{$service->name}} <br></h5>
                                                    <h5><strong>Cena:</strong> {{$service->price}} zł</h5>
                                                </div>
                                                <hr><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            ANULUJ
                                                        </button>
                                                    </div>
                                                    <div class="col-auto">
                                                        <form action="{{ route('services.destroy' ,$service->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    USUŃ
                                                                </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
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
