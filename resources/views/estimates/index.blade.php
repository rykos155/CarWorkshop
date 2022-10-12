@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>
<div class="container-fluid">
    <div class="row justify-content-between align-items-center">
        <div class="col offset-1">
            <h1 class="display-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
                Lista kosztorysów {{ $text }}
            </h1>  
        </div>
    </div>  
<hr>
<br>          
    <div class="row">
        <div class="col-sm-12">
            <table id="estimate-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Klient</th>
                    <th>Panel klienta</th>
                    <th>Pojazd</th> 
                    <th>Panel pojazdu</th>
                    <th>Kosztorys na mailu</th>
                    <th>Usługi</th>
                    <th>Części</th>
                    <th>Operacje</th>                   
                </tr>
            </thead>
        </div>
    </div>  
            <tbody style="text-align:center">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($estimates as $estimate) 
                        <tr>
                            <td class="align-middle">
                                {{ $estimate->order->car->client->name }} {{ $estimate->order->car->client->surname }}
                            </td>
                            <td class="align-middle" width="75">
                                <a type="button" class="btn btn-dark" href="{{ route('clients.show' ,$estimate->order->car->client->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                    </svg>
                                </a>
                            </td>
                            <td class="align-middle">
                                {{ $estimate->order->car->brand->brand }} {{ $estimate->order->car->carmodel->model }}
                            </td>       
                            <td class="align-middle" width="75">    
                                <a type="button" class="btn btn-dark" href="{{ route('cars.showOneCar' ,$estimate->order->car->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                    </svg>
                                </a>
                            </td>     
                            <td class="align-middle" width="200">
                                @if($estimate->isSend>=1)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                        <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                    </svg>
                                @endif
                            </td>
                            <td width="300">
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <a type="button" class="btn btn-secondary" href="{{ route('services.create' ,$estimate->id) }}">                                       
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                    Dodaj
                                </a> 
                                @if($estimate->service->count()!=0)    
                                    <a type="button" class="btn btn-secondary" type="button"  data-bs-toggle="modal" data-bs-target="#list{{ $estimate->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                        </svg>
                                        Lista
                                    </a>
                                <div class="modal fade" id="list{{ $estimate->id }}" tabindex="-1" role="dialog" aria-labelledby="listLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="container p-4">
                                            <div class="row justify-content-between">
                                                <div class="col-10 col-md-auto">
                                                    <h3 class="modal-title" id="listLabel"><strong>Lista usług do zrealizowania zlecenia</strong></h3>
                                                </div>
                                                <div class="col-2 col-md-auto">
                                                    <div class="col-1 col-md-auto offset-md-1">  
                                                        <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </div>
                                                </div>                                                                                                                              
                                            </div>  
                                            <hr><hr>                                                     
                                            <br>
                                            <div class="modal-body">
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                            @php
                                                                $suma = 0;
                                                            @endphp
                                                        <h5>
                                                            @foreach ($estimate->service as $service) 
                                                                <strong>Usługa: </strong>
                                                                    {{ $service->name }}
                                                                <strong>Cena: </strong> 
                                                                    {{ $service->price }} zł
                                                                
                                                                @php
                                                                    $suma = $suma + $service->price
                                                                @endphp
                                                                <br>
                                                            @endforeach      
                                                        </h5>
                                                    </div>
                                                </div>  
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <br><br>
                                                        <h5>
                                                            <strong>Łączna cena usług: </strong> 
                                                                {{$suma}} zł
                                                        </h5>
                                                    </div>
                                                </div>
                                                <br>
                                                <hr><hr>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('services.show', $estimate->id)}}" class="btn">
                                                            Przejdź do widoku listy usług
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>                                                                                       
                                        </div>
                                    </div>
                                </div>
                                <a type="button" class="btn btn-secondary" href="{{ route('services.generatePDFforService' ,$estimate->id) }}">                                       
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                        <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                                        <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                                    </svg>
                                    PDF
                                </a> 
                                @endif
                                </div>
                            </td>
                            
                            <td width="300">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <a type="button" class="btn btn-secondary" href="{{ route('parts.create' ,$estimate->id) }}">                                       
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                        Dodaj
                                    </a>    
                                    @if($estimate->part->count()!=0) 
                                        <a type="button" class="btn btn-secondary" type="button"  data-bs-toggle="modal" data-bs-target="#listOfParts{{ $estimate->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                            </svg>
                                            Lista 
                                        </a>
                                
                                        <div class="modal fade" id="listOfParts{{ $estimate->id }}" tabindex="-1" role="dialog" aria-labelledby="listOfPartsLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                <div class="container p-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-10 col-md-auto">
                                                            <h3 class="modal-title" id="listOfPartsLabel"><strong>Lista części</strong></h3>
                                                        </div>
                                                        <div class="col-2 col-md-auto">
                                                            <div class="col-1 col-md-auto offset-md-1">  
                                                                <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </div>
                                                        </div>                                                                                                                              
                                                    </div>  
                                                    <hr><hr>                                                     
                                                    <br>
                                                    <div class="modal-body">
                                                        <div class="row justify-content-between">
                                                            <div class="col">
                                                                    @php
                                                                        $suma = 0;
                                                                    @endphp
                                                                <h5>
                                                                    @foreach ($estimate->part as $part) 
                                                                        <strong>{{ $part->name }}</strong> w ilości <strong>{{ $part->amount }}</strong>
                                                                        <strong> - </strong> {{ $part->price }} <strong>zł</strong> 
                                                                        @php
                                                                            $suma = $suma + $part->price;
                                                                        @endphp
                                                                        <br>
                                                                    @endforeach      
                                                                </h5>
                                                            </div>
                                                        </div>  
                                                        <div class="row justify-content-between">
                                                            <div class="col">
                                                                <br><br>
                                                                <h5>
                                                                    <strong>Łączna cena części: </strong> 
                                                                        {{$suma}} zł
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <hr><hr>
                                                        <br>
                                                        <div class="row justify-content-center">
                                                            <div class="col-auto">
                                                                <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('parts.show', $estimate->id) }}" class="btn">
                                                                    Przejdź do widoku listy części
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>                                                                                       
                                                </div>
                                            </div>
                                        </div>
                                        <a type="button" class="btn btn-secondary" href="{{ route('parts.generatePDFforParts' ,$estimate->id) }}">                                       
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                                <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                                                <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                                            </svg>
                                            PDF
                                        </a> 
                                    @endif
                                </div>
                            </td> 
                            <td width="300">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <a type="button" class="btn btn-dark" href="{{ route('orders.showOneOrder' ,$estimate->order->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </a>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mail1{{$estimate->id}}">                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                                        </svg>
                                    </button>
                                    <div class="modal fade" id="mail1{{$estimate->id}}" tabindex="-1" role="dialog" aria-labelledby="mail1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">                                                                                         
                                                <form action="{{route('send-email' ,$estimate->id)}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                        <div class="container-fluid p-4"> 
                                                            <div class="row justify-content-between">
                                                                <div class="col-10 col-md-auto offset-md-2">  
                                                                    <h4 class="modal-title" id="mail1Label">
                                                                        MAIL DO KLIENTA: {{$estimate->order->car->client->name}} {{$estimate->order->car->client->surname}} 
                                                                    </h4>
                                                                </div>
                                                                <div class="col-1 col-md-auto offset-md-1">  
                                                                <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row align-items-center justify-content-center">
                                                                <div class="col-7">
                                                                    <div class="form-group">
                                                                        <label for="emailRecipient">Odbiorca </label>
                                                                        <input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="Odbiorca" value="{{ $estimate->order->car->client->email}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row align-items-center justify-content-center">
                                                                <div class="col-7">
                                                                    <div class="form-group">
                                                                        <label for="emailSubject">Temat </label>
                                                                        <input type="text" name="emailSubject" id="emailSubject" class="form-control" placeholder="Temat" value="KOSZTORYS dla pojazdu {{$estimate->order->car->brand->brand}} {{$estimate->order->car->carmodel->model}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row align-items-center justify-content-center">
                                                                <div class="col-7">
                                                                    <div class="form-group">
                                                                        <label for="emailBody">Wiadomość </label>
                                                                        <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Wiadomość" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row align-items-center justify-content-center">
                                                                <div class="col-7">
                                                                    <div class="form-group">
                                                                        <label for="emailAttachments">Załączniki </label>
                                                                        <input type="file" name="emailAttachments[]" multiple="multiple" id="emailAttachments" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row align-items-center justify-content-center">
                                                                <div class="col-auto">
                                                                    <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                        Anuluj
                                                                    </button>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="submit" class="btn btn-success">Wyślij e-mail </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>        
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#list1{{$estimate->id}}">                                      
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                    </button>
                                
                                    <div class="modal fade" id="list1{{$estimate->id}}" tabindex="-1" role="dialog" aria-labelledby="list1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">                                                                                         
                                                <div class="container-fluid p-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-10 col-md-auto">  
                                                            <h3 class="modal-title" id="list1Label"><strong>Dodatkowe informacje o kosztorysie</strong></h3>
                                                        </div>
                                                        <div class="col-1 col-md-auto offset-md-1">  
                                                        <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </div>
                                                    </div>                          
                                                    <hr>
                                                    <br>
                                                    <div class="row align-items-center">
                                                        <div class="col-10 col-md-auto">                                                                                                                  
                                                            <h5><strong>Osoba tworząca kosztorys: </strong>{{ $estimate->user->name}} {{ $estimate->user->surname}}</h5> 
                                                            <br>
                                                            <h5><strong>Data utworzenia kosztorysu: </strong>{{ $estimate->created_at}}</h5>
                                                            <br>
                                                            <h5><strong> Data modyfikacji kosztorysu: </strong>{{ $estimate->updated_at}}</h5> 
                                                        </div>        
                                                        <div class="col-1 col-md-auto offset-md-1">                                                                
                                                            <p style="text-align: right">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                                </svg>
                                                            </p>                                                                
                                                        </div>
                                                    </div> 
                                                </div>                                          
                                            </div>
                                        </div>
                                    </div>
                                    @if($estimate->part->count()!=0 || $estimate->service->count()!=0) 
                                        <a type="button" class="btn btn-dark" href="{{ route('estimates.generatePDFforEstimate' ,$estimate->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                                <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                                                <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                                            </svg>
                                        </a>
                                    @endif
                                @if($estimate->order->status_id!=5) 
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$estimate->id}}">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                    </button>
                                
                                    <div class="modal fade" id="exampleModal-{{$estimate->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="container-fluid p-4">
                                                        <div class="row justify-content-between">
                                                            <div class="col-10 col-md-auto">  
                                                                <h3><strong>Usunięcie kosztorysu</strong></h3>
                                                            </div>
                                                            <div class="col-1 col-md-auto">  
                                                            <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <br>
                                                        <div class="row align-items-center justify-content-center">
                                                            <div class="col col-md-auto"> 
                                                                <h4><strong>Czy napewno chcesz usunąć kosztorys dla zlecenia wygenerowanego dla pojazdu:</strong></h4>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row align-items-center justify-content-center">
                                                            <div class="col col-md-auto"> 
                                                                <h4>{{ $estimate->order->car->brand->brand }} {{ $estimate->order->car->carmodel->model }} | {{ $estimate->order->car->VIN }}</h4>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <br>
                                                        <div class="row align-items-center justify-content-center">
                                                            <div class="col-auto">
                                                                <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                    ANULUJ
                                                                </button>
                                                            </div>
                                                            <div class="col col-md-auto"> 
                                                                <form action="{{ route('estimates.destroy' ,$estimate->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger" type="submit" style="box-shadow: 6px 6px 19px #182019;">
                                                                        USUŃ
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
            $('#estimate-table').DataTable({              
                dom: 'Bfrtip',
                buttons: [
                    'colvis', 'pageLength',
                ],
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pl.json'
                },
                columnDefs: [
                    {
                        "targets": [ 1 ],
                        "visible": false
                    },
                    {
                        "targets": [ 3 ],
                        "visible": false
                    },
                ]
            });
        } );
    </script>
@endsection
