<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>KOSZTORYS</title>

        <style>
            .invoice-box {
            max-width: 800px;
            margin: auto;
            align-content   padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
            p {
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        <div class="invoice-box">  
            <div style="padding: 10px">
                <div class="row justify-content-center">
                    <div style="text-align:center">
                        <h1><strong>KOSZTORYS</strong></h1>  
                        <br>  
                        <h2>
                            <strong>
                                KLIENT: 
                                    @foreach($estimate ?? '' as $data)
                                        {{ $data->order->car->client->name }}
                                        {{ $data->order->car->client->surname }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>   
                        <h2>
                            <strong>
                                POJAZD: 
                                    @foreach($estimate ?? '' as $data)
                                        {{ $data->order->car->brand->brand }}
                                        {{ $data->order->car->carmodel->model }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>  
                    </div>
                </div>
            <br><hr><br>
                <div class="row justify-content-center">
                    <div class="col">
                        <h1><strong>USLUGI</strong></h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped small" style="width:100%">
                            <thead style="text-align:center">
                                <tr>
                                    <th scope="col">Nazwa uslugi</th>
                                    <th scope="col">Cena</th>
                                </tr>
                            </thead>
                    </div>
                </div>
                                  
                            <tbody style="text-align:center">
                                @foreach($estimate ?? '' as $data)
                                    @foreach($data->service  as $services)
                                    <tr>
                                        <td>
                                            {{ $services->name }}
                                        </td>
                                        <td>
                                            {{ $services->price }}
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                <div style="text-align:right; margin-right: 10px">
                    @php
                        $sumaUslug = 0;
                    @endphp
                    @foreach($estimate ?? '' as $data)
                        @foreach($data->service  as $services)
                            @php
                                $sumaUslug = $sumaUslug + $services->price;
                            @endphp
                        @endforeach
                    @endforeach
                    <p>
                        <h4>Laczna kwota za uslugi: <strong> {{ $sumaUslug }} zl</strong></h4>
                    </p>
                </div>
            <hr>
                <div class="row justify-content-center">
                    <div class="col">
                        <h1><strong>CZESCI</strong></h1>  
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped small" style="width:100%">
                            <thead style="text-align:center">
                                <tr class="table-danger">
                                    <th scope="col">Nazwa czesci</th>
                                    <th scope="col">Ilosc</th>
                                    <th scope="col">Cena</th>
                                </tr>
                            </thead>
                    </div>
                </div>
                                  
                            <tbody style="text-align:center">
                                @foreach($estimate ?? '' as $data)
                                    @foreach($data->part  as $parts)
                                        <tr>
                                            <td>{{ $parts->name }}</td>
                                            <td>{{ $parts->amount }}</td>
                                            <td>{{ $parts->price }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    
                <div style="text-align:right; margin-right: 10px">
                    @php
                        $suma = 0;
                    @endphp
                    @foreach($estimate ?? '' as $data)
                        @foreach($data->part  as $parts)
                            @php
                                $suma = $suma + $parts->price;
                            @endphp
                        @endforeach
                    @endforeach
                    <p>
                        <h4>Laczna kwota za czesci: <strong> {{ $suma }} zl</strong></h4>
                    </p>
                </div>
                <br><hr>
                <div class="row align-items-center justify-content-center">
                    <div style="text-align:center;">
                        <h2>Laczna kwota kosztorysu:  {{ $suma + $sumaUslug }} zl</h2>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <p>Aplikacja warsztatu samochodowego </p>
                    </div>
                    <div style="text-align:right; margin-right: 10px">
                        <p>Data wygenerowania raportu: {{date('m/d/Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>