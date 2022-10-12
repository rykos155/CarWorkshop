<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>LISTA CZĘŚCI</title>

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
                        <h1><strong>LISTA CZESCI</strong></h1>  
                        <br>  
                        <h2>
                            <strong>
                                KLIENT: 
                                    @foreach($part ?? '' as $data)
                                        {{ $data->estimate->order->car->client->name }}
                                        {{ $data->estimate->order->car->client->surname }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>   
                        <h2>
                            <strong>
                                POJAZD: 
                                    @foreach($part ?? '' as $data)
                                        {{ $data->estimate->order->car->brand->brand }}
                                        {{ $data->estimate->order->car->carmodel->model }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>    
                    </div>
                </div>
            <br><hr><br>
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
                                @foreach($part ?? '' as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->amount }}</td>
                                    <td>{{ $data->price }} zl</td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                <div style="text-align:right; margin-right: 10px">
                    @php
                        $suma = 0;
                    @endphp
                    @foreach($part ?? '' as $data)
                        @php
                            $suma = $suma + $data->price;
                        @endphp
                    @endforeach
                    <p>
                        <h4>Laczna kwota za czesci: <strong> {{ $suma }} zl</strong></h4>
                    </p>
                </div>
            <hr>
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