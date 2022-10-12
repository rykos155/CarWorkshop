@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<hr>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col offset-1">
            <h1 class="display-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>    
            Baza pojazdów wszystkich klientów</h1>
        </div>
    </div>  
<hr>
<br>      
    <div class="row">
        <div class="col-sm-12">
            <table id="car-table" class="table table-striped small" style="width:100%">
            <thead style="text-align:center">
                <tr>
                    <th>Klient</th>
                    <th>Pojazd / Generacja</th>
                    <th>Data produkcji</th>
                    <th>VIN</th>
                    <th>Tablica rejestracyjna</th>
                    <th>Kolor</th>
                    <th>Typ nadwozia</th>
                    <th>Rodzaj silnika</th>
                    <th>Pojemnosc</th>
                    <th>Moc</th>
                    <th>Przebieg</th>
                    <th>Operacje</th>
                </tr>
            </thead>
        </div>
    </div>  
        <tbody style="text-align:center">
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($cars as $car) 
                        <tr>
                            <td class="align-middle">{{ $car->client->name }} {{ $car->client->surname }}</td>
                            <td class="align-middle">
                                <p>{{ $car->brand->brand }} {{ $car->carmodel->model }} </p>
                                <p>{{ $car->generation }} </p>
                            </td> 
                            <td class="align-middle">{{ $car->productionYear }}</td>
                            <td class="align-middle">{{ $car->VIN}}</td>
                            <td class="align-middle">{{ $car->registrationNumber}}</td>
                            <td class="align-middle">{{ $car->color}}</td>
                            <td class="align-middle">{{ $car->type}}</td>
                            <td class="align-middle">{{ $car->engineType}}</td>
                            <td class="align-middle">{{ $car->engineCapacity}} tys cm3</td>
                            <td class="align-middle">{{ $car->enginePower}} KM</td>
                            <td class="align-middle">{{ $car->mileage}} km</td>
                            <td class="align-middle" width="120">       
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">                           
                                    <a type="button" class="btn btn-dark" href="{{ route('cars.edit' ,$car->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('orders.show' ,$car->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </a>
                                    <a type="button" class="btn btn-dark" href="{{ route('clients.show' ,$car->client->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>       
                        </tr>
                    @endforeach
                </div>
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
            $('#car-table').DataTable({
                
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
