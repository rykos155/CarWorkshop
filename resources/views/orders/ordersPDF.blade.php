<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8">
        <title>ZLECENIE</title>

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
                        <h1><strong>ZLECENIE</strong></h1>  
                        <br><hr><hr>
                        <h2>
                            <strong>
                                KLIENT: 
                                    @foreach($order ?? '' as $data)
                                        {{ $data->car->client->name }}
                                        {{ $data->car->client->surname }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>   
                        <h2>
                            <strong>
                                POJAZD: 
                                    @foreach($order ?? '' as $data)
                                        {{ $data->car->brand->brand }}
                                        {{ $data->car->carmodel->model }}
                                        @break
                                    @endforeach
                            </strong>
                        </h2>  
                    </div>
                </div>
                <hr><br>
                <div class="row justify-content-center">
                    <div class="col-auto" style="text-align:center"> 
                        <h3>
                            Zlecenie zostalo przyjete
                        </h3>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4" style="text-align:center"> 
                        <h3>
                            Termin przyjecia: {{ $data->startDate }} 
                        </h3>
                        <h3>
                            Termin ukonczenia: {{ $data->endDate }}
                        </h3>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4" style="text-align:center">
                        <h5>
                            Status zlecenia: {{ $data->status->status }}
                        </h5>
                        <h5>
                            Uwagi klienta: {{ $data->description }}
                        </h5>
                    </div>
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