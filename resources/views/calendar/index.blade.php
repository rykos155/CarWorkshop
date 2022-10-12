@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')

<styles>
    <!-- Kalendarz --> 
    <link href='fullcalendar/main.css' rel='stylesheet' />
</styles>

<br>
<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-10">
            <div id='calendar'>
            </div>
        </div>
        <div class="col-2 col-md-auto p-4 rounded-3" style="background-color: #414141; box-shadow: 6px 6px 19px black; opacity:0.85;">
            <h2><strong>LEGENDA</strong></h2>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="accepted" checked="">
                    <label class="form-check-label" for="accepted">&nbsp Zlecenie przyjęte</label>
                    <div id="square" style="background-color: green; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="priority" checked="">
                    <label class="form-check-label" for="priority">&nbsp Priorytet</label>
                    <div id="square" style="background-color: red; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="sended" checked="">
                    <label class="form-check-label" for="sended">&nbsp Wysłany kosztorys</label>
                    <div id="square" style="background-color: purple; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="inProgress" checked="">
                    <label class="form-check-label" for="inProgress">&nbsp W realizacji</label>
                <div id="square" style="background-color: blue; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="waiting" checked="">
                    <label class="form-check-label" for="waiting">&nbsp Oczekujące na części</label>
                <div id="square" style="background-color: orange; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="customer" checked="">
                    <label class="form-check-label" for="customer">&nbsp Oczekuje na klienta</label>
                <div id="square" style="background-color: #664717; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="canceled" checked="">
                    <label class="form-check-label" for="canceled">&nbsp Zlecenie anulowane</label>
                <div id="square" style="background-color: #FF7777; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="ended" checked="">
                    <label class="form-check-label" for="ended">&nbsp Zlecenie zakończone</label>
                <div id="square" style="background-color: black; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
            <br>
            <div style="overflow: hidden;">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="other" checked="">
                    <label class="form-check-label" for="other">&nbsp Inne</label>
                <div id="square" style="background-color: grey; width: 10px; height: 10px; float: left; margin-top: 5px;"></div>
                </div>
            </div>
        </div> 
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>
                    Zlecenie
                </h4>
                <button type="button" class="btn btn-dark" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row align-items-center align-self-center justify-content-center">
                        <div class="col-auto">
                            <input type="text" name="client" id="client" disabled style="border: none; background: transparent; color: white"/>
                        </div>
                    </div>
                    <div class="row align-items-center align-self-center justify-content-center">
                        <div class="col-auto">
                            <input type="text" name="car" id="car" disabled style="border: none; background: transparent; color: white"/>
                        </div>
                    </div>
                    <br>
                    <div class="row align-items-center align-self-center justify-content-center">
                        <div class="col-auto">
                            <label class="col-xs-4" for="starts-at">Data rozpoczęcia: </label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="starts_at" id="starts-at" disabled style="border: none; background: transparent; color: white"/>
                        </div>
                    </div>
                    <br>
                    <div class="row align-items-center align-self-center justify-content-center">
                        <div class="col-auto">
                            <label class="col-xs-4" for="ends-at">Data zakończenia: </label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="ends_at" id="ends-at" disabled style="border: none; background: transparent; color: white"/>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="box-shadow: 6px 6px 19px black;"> 
                            <a type="button" class="btn btn-secondary" id="idOfClient">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                </svg>  
                                Panel klienta 
                            </a>
                            <a type="button" class="btn btn-secondary" id="idOfCar" href="{{ url('cars') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                                Panel pojazdu 
                            </a>
                            <a type="button" class="btn btn-secondary" id="idOfOrder" href="{{ url('orders') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                Zlecenie
                            </a> 
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-scripts')
<script src='fullcalendar/main.js' defer></script>
<script>
    $(document).ready(function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        dayHeaderFormat: { weekday: 'long' },
        headerToolbar: {
            left: 'prev,next,today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        buttonText:
        {
            today: 'Dzisiaj',
            dayGridMonth: 'Miesiąc',
            dayGridWeek: 'Tydzień',
            dayGridDay: 'Dzień'
        },
        initialView: 'dayGridMonth',
        //selectable: true,
        //editable: true,

        eventClick: function(order) {  // Funkcja od okna modalnego 
            $(".modal").modal("show");
                // Przekazanie ścieżki z odpowiednim ID do okna modalnego
                var LinkOrder = `http://127.0.0.1:8000/orders/${order.event.id}/showOneOrder`;
                var linkCar = `http://127.0.0.1:8000/cars/${order.event.extendedProps.idCar}/showOneCar`;
                var linkClient = `http://127.0.0.1:8000/clients/${order.event.extendedProps.idClient}`;
                $("#idOfClient").attr('href', linkClient);
                $("#idOfOrder").attr('href', LinkOrder);
                $("#idOfCar").attr('href', linkCar);

                // Przekazanie formatu oraz daty
                var dateSettings = { "year": "numeric", "month": "2-digit", "day": "2-digit" };
                var startdate = calendar.formatDate(order.event.start,  dateSettings);
                var enddate = calendar.formatDate(order.event.end,  dateSettings);
            
            // Przekazanie daty do okna modalnego
            $(".modal")
                .find("#starts-at")
                .val(startdate);
            $(".modal")
                .find("#ends-at")
                .val(enddate)

            // Przekazanie klienta oraz samochodu
            $(".modal")
                .find("#client")
                .val(order.event.extendedProps.client);
            $(".modal")
                .find("#car")
                .val(order.event.extendedProps.car);
                
            $("input").prop("readonly", true);
        },
        eventSources:[ 
            {
                url:'http://127.0.0.1:8000/orders/1/getOrders',
                method: 'GET',
                color: 'green'
            },   
            {
                url:'http://127.0.0.1:8000/orders/2/getOrders',
                method: 'GET',
                color: 'red'
            },  
            {
                url:'http://127.0.0.1:8000/orders/3/getOrders',
                method: 'GET',
                color: 'purple' 
            },  
            {
                url:'http://127.0.0.1:8000/orders/4/getOrders',
                method: 'GET',
                color: '#FF7777'
            }, 
            {
                url:'http://127.0.0.1:8000/orders/5/getOrders',
                method: 'GET',
                color: 'black'  
            }, 
            {
                url:'http://127.0.0.1:8000/orders/6/getOrders',
                method: 'GET',
                color: 'orange'
            }, 
            {
                url:'http://127.0.0.1:8000/orders/7/getOrders',
                method: 'GET',
                color: 'blue',      
            }, 
            {
                url:'http://127.0.0.1:8000/orders/8/getOrders',
                method: 'GET',
                color: 'grey'
            }, 
            {
                url:'http://127.0.0.1:8000/orders/9/getOrders',
                method: 'GET',
                color: '#664717'  
            }, 
        ]
        
        });
        calendar.setOption('firstDay', 1);                // ustawienie pierwszego dnia tygodnia
        calendar.setOption('height', 750);                // wysokosc klendarza
        calendar.setOption('locale', 'pl');               // jezyk kalendarza
        calendar.setOption('displayEventTime', false);    // usuwa godziny
        calendar.setOption('navLinks', true);             // usuwa godziny
        calendar.render();     

        //$("#starts-at, #ends-at").today();

    

        $("#accepted").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/1/getOrders',
                    method: 'GET',
                    color: 'green'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/1/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#priority").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/2/getOrders',
                    method: 'GET',
                    color: 'red'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/2/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#sended").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/3/getOrders',
                    method: 'GET',
                    color: 'purple' 
                };
                calendar.addEventSource(sendedEvent);
                // $('#calendar').fullCalendar('addEventSource', 'http://127.0.0.1:8000/orders/1/getOrders');
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/3/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#inProgress").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/7/getOrders',
                    method: 'GET',
                    color: 'blue' 
                };
                calendar.addEventSource(sendedEvent);
                // $('#calendar').fullCalendar('addEventSource', 'http://127.0.0.1:8000/orders/1/getOrders');
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/7/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#waiting").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/6/getOrders',
                    method: 'GET',
                    color: 'orange'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/6/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#customer").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/9/getOrders',
                    method: 'GET',
                    color: '#664717'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/9/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#canceled").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/4/getOrders',
                    method: 'GET',
                    color: '#FF7777'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/4/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#ended").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/5/getOrders',
                    method: 'GET',
                    color: 'black'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/5/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });

        $("#other").change(function(){
            if(this.checked){
                var sendedEvent = {
                    url:'http://127.0.0.1:8000/orders/8/getOrders',
                    method: 'GET',
                    color: 'grey'
                };
                calendar.addEventSource(sendedEvent);
            }else{
                var source = calendar.getEventSources();
                for(var i = 0; i < source.length; i++){
                    if(source[i].url == 'http://127.0.0.1:8000/orders/8/getOrders'){
                        source[i].remove();
                    }
                }
            }
        });
    });


    
        

</script>
@endsection