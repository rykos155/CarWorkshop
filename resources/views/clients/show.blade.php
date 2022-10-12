@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>  
<div class="container-fluid">  
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-7 offset-md-1"> 
            <h1 class="display-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>    
            Klient
                @foreach ($clients as $client)
                    {{ $client->name }} {{ $client->surname }}
                @endforeach
            </h1>
        </div>
        <div class="col-sm-2">
            <div class="text-right">
                <a style="box-shadow: 6px 6px 19px black; background-color: #141414;" href="{{ route('clients.create')}}" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                    Dodaj nowego klienta
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
                        <th>Imię Nazwisko</th>
                        <th>Telefon</th>   
                        <th>Mail</th>
                    </tr>
                </thead>
        </div>
    </div>  
    <tbody style="text-align:center">
        <div class="row">
            <div class="col-sm-12">
                @foreach ($clients as $client) 
                    <tr>
                        <td>{{ $client->name }} {{ $client->surname }}</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>    
                        {{ $client->phoneNumber }}</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                            {{ $client->email }}</td>       
                    </tr>  
            </div>
        </div>  
            </table>
                <div class="rounded-3 p-5" style="background-color: #2E2E2E;">                              
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <h3><strong>SZCZEGÓŁOWE DANE KLIENTA</strong></h3>                          
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-5 text-center rounded-3 p-4" style="background-color: #1E1E1E; box-shadow: 6px 6px 19px black;">
                            <p><strong>PESEL: </strong> {{ $client->pesel }} </p>                   
                            <p><strong>ADRES: </strong> {{ $client->home }} {{ $client->street }} {{ $client->houseNumber }} {{ $client->flatNumber }} </p>
                            <p><strong></strong> {{ $client->zipCode }} {{ $client->commune }} | {{ $client->province->provinceName }} </p> 
                            <br>
                            <a style="box-shadow: 5px 5px 19px black" type="button" class="btn btn-secondary" href="{{ route('clients.edit' ,$client->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>  
                                Edytuj dane klienta                              
                            </a>
                        </div>
                    </div>   
                    <br>
                    <hr>
                    <br>
                    @if($client->deactivate == 1)
                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    <h1>KLIENT ZOSTAŁ ZABLOKOWANY</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center">
                                    <a style="box-shadow: 5px 5px 19px black" type="button" class="btn btn-secondary" href="{{ route('clients.restore' ,$client->id) }}">
                                        ODBLOKUJ                          
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                                <div class="row">
                                    <div class="col">
                                        <div class="text-center">
                                            @if($client->car->count()==0)
                                                <h3><strong>Klient nie posiada jeszcze pojazdu. </strong></h3>
                                                <h3><strong>Dodaj pojazd klikając guzik "Dodaj pojazd do listy klienta" !</strong></h3>
                                                <br><br>
                                                <a href="{{ route('cars.create', $client->id)}}" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                    Dodaj pojazd
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>   
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        @if($client->car->count()!=0)
                                            <h3><strong>SAMOCHODY KLIENTA</strong></h3>
                                        @endif
                                    </div>
                                </div>       
                                <br>
                                @if($client->car->count()!=0)  
                                    <div class="row justify-content-md-center">
                                        <div class="col-3 text-center rounded-3 p-4" style="background-color: #1E1E1E; box-shadow: 6px 6px 19px black" >                                                                                                                  
                                            <h1 style="text-align: left"><strong>{{$client->car->count()}}</strong></h1>
                                            @if($client->car->count()==1)
                                                <h4 style="text-align: left"><strong>POJAZD</strong></h4>    
                                            @elseif($client->car->count()>=2 & $client->car->count()<=4)
                                                <h4 style="text-align: left"><strong>POJAZDY</strong></h4> 
                                            @else
                                                <h4 style="text-align: left"><strong>POJAZDÓW</strong></h4>  
                                            @endif                                                                                     
                                            <p style="text-align: right">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                </svg>
                                            </p>      
                                            <br>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="box-shadow: 5px 5px 19px black;">  
                                                <a href="{{ route('cars.create', $client->id)}}" class="btn btn-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                                    Dodaj pojazd
                                                </a>
                                                @if($client->car->count()>0)
                                                    <a href="{{ route('cars.show', $client->id)}}" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                        Wyświetl listę
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                @endif
                                <br>    
                                @if($client->car->count()!=0)                                               
                                <hr><br>
                                <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                        <h3><strong>ZLECENIA</strong></h3>
                                    </div>
                                </div> 
                                <br>
                                <div class="row justify-content-md-center">
                                    <div class="col-3 text-center rounded-3 p-4" style="background-color: #1E1E1E; box-shadow: 6px 6px 19px black">                                                                                                                  
                                        <h1 style="text-align: left"><strong>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach($client->car as $cars)                                                                   
                                                @foreach($activeOrders as $activeOrder)
                                                    @if($activeOrder === $cars->id)
                                                        @php
                                                            $i = $i + 1;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                
                                                @if($loop->last)
                                                    {{$i}}
                                                @endif
                                            @endforeach
                                        </strong></h1>
                                            @if( $i == 1)
                                                <h4 style="text-align: left"><strong>AKTYWNE ZLECENIE</strong></h4>    
                                            @elseif( $i >=2 & $i <=4)
                                                <h4 style="text-align: left"><strong>AKTYWNE ZLECENIA</strong></h4> 
                                            @else
                                                <h4 style="text-align: left"><strong>AKTYWNYCH ZLECEŃ</strong></h4> 
                                            @endif  
                                                                    
                                            <p style="text-align: right">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            </p>     
                                            <br>
                                            <a style="box-shadow: 5px 5px 19px black" href="{{ route('orders.showCar', $client->id)}}" class="btn btn-secondary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                                </svg>
                                                    Przejdź do listy aktywnych zleceń
                                                </a>
                                        </div>        
                                        <div class="col-1">
                                        </div> 
                                        <div class="col-3 text-center rounded-3 p-4" style="background-color: #1E1E1E; box-shadow: 6px 6px 19px black">                                                                                                                  
                                            <h1 style="text-align: left"><strong>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach($client->car as $cars)                                                                   
                                                    @foreach($endedOrders as $endedOrder)
                                                        @if($endedOrder === $cars->id)
                                                            @php
                                                                $i = $i + 1;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    
                                                    @if($loop->last)
                                                        {{$i}}
                                                    @endif
                                                @endforeach
                                            </strong></h1>
                                            <h4><strong>
                                            @if( $i == 1)
                                                <h4 style="text-align: left"><strong>ZREALIZOWANE ZLECENIE</strong></h4>    
                                            @elseif( $i >=2 & $i <=4)
                                                <h4 style="text-align: left"><strong>ZREALIZOWANE ZLECENIA</strong></h4> 
                                            @else
                                                <h4 style="text-align: left"><strong>ZREALIZOWANYCH ZLECEŃ</strong></h4> 
                                            @endif                                                              
                                                    <p style="text-align: right">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                                    </svg>
                                                    </p>       
                                                    <br>
                                                    <a style="box-shadow: 5px 5px 19px black" href="{{ route('orders.showEnded', $client->id)}}" class="btn btn-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                        Przejdź do historii zleceń
                                                    </a>
                                                </div>     
                                            </div>  
                                            @endif    
                                            
                                            <br><hr><br>
                                            <div class="row justify-content-center">
                                                <div class="col-auto">
                                                    <h3><strong>SEKCJA KOMENTARZY</strong></h3>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <table id="comment-table" class="table table-striped small" style="width:100%">
                                                        @if($client->comment->count()>0)
                                                            <thead style="text-align:center">
                                                                <tr>
                                                                    <th>Komentarz</th>
                                                                    <th width="250">Operacje</th>   
                                                                </tr>
                                                            </thead>
                                                        @else
                                                            <div class="row justify-content-center">
                                                                <div class="col-auto">
                                                                    <hr>
                                                                        <h5>BRAK KOMENTARZY</h5>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <tbody style="text-align:center">
                                                            @foreach ($client->comment as $comments) 
                                                                <tr>
                                                                    <td>{{ $comments->text }}</td>
                                                                    <td>
                                                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example"> 
                                                                            <a type="button" class="btn btn-dark" href="{{ route('comments.edit', $comments->id) }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                                                </svg>
                                                                            </a>
                                                                            <a type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#commentModal-{{$comments->id}}"> 
                                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                                                                </svg>
                                                                            </a>
                                                                            <div class="modal fade" id="commentModal-{{$comments->id}}" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="commentModalLabel">Czy napewno chcesz usunąć komentarz?</h5>
                                                                                            <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="modal-body">
                                                                                            <h6>{{ $comments->text }}</h6>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row justify-content-center">
                                                                                            <div class="col-auto">
                                                                                                <button type="button" class="btn btn-warning" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                                                    ANULUJ
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="col-auto">
                                                                                                <form action="{{ route('comments.destroy' ,$comments->id) }}" method="post">
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
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>  
                                            <br>     
                                            <form id="comment-form" method="post"
                                                action="{{ route('comments.store', $client->id) }}"> 
                                                @method('POST')
                                                @csrf  
                                            <div class="row justify-content-center">
                                                <div class="col-auto">
                                                    <textarea name="komentarz" cols="120">Wpisz komentarz</textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-auto">           
                                                    <button type="submit" class="btn" style="box-shadow: 6px 6px 19px black; background-color: #141414;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                                        </svg>
                                                        Dodaj nowy komentarz
                                                    </button>     
                                                </div>
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                    @endif
                    </div>
                    @endforeach             
                </div>
            </tbody>
        
        </div>
    </div>
</div>
@endsection

@section('js-scripts')
    <script>
        shown=false;
        function list(id){
            var row = document.getElementById("rykos " + id).style;
            console.log(row);
            if(row.display==='none'){
                row.display='table-row';
                shown=true;
            }else{
                row.display='none'
                shown=false;
            }
        }
    </script>
@endsection
