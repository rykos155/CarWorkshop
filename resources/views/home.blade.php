@extends('layouts.app')

@section('css-styles')

@endsection

@section('content')
<div class="container-fluid p-5 w-75 rounded-3" style="background-color: #2E2E2E; box-shadow: 6px 6px 19px black;">
    <hr>
    <div class="row align-items-center justify-content-between">
        <div class="col-5">
            <h1 class="display-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                </svg>
                Strona główna
            </h1>
        </div>
        <div class="col-3">
                <div id="digit_clock_time"></div>
                <div id="digit_clock_date"></div>
        </div>
    </div>
    <hr><br><br>
    <div class="row justify-content-around">
        <div class="col-3 p-4 rounded-3" style="box-shadow: 6px 6px 19px black;">
            <h5><strong>Użytkownicy aplikacji: </strong></h5>
            <h1><strong>{{$users->count()}}</strong></h1>
        </div>
        <div class="col-3 p-4 rounded-3" style="box-shadow: 6px 6px 19px black;">
            <h5><strong>Klienci warsztatu: </strong></h5>
            <h1><strong>{{$clients->count()}}</strong></h1>
        </div>
    </div>
    <br><br><br>
    <div class="row justify-content-around">
        <div class="col-3 p-4 rounded-3" style="box-shadow: 6px 6px 19px black;">
            <h5><strong>Pojazdy klientów: </strong></h5>
            <h1><strong>{{$cars->count()}}</strong></h1>
        </div>
        <div class="col-3 p-4 rounded-3" style="box-shadow: 6px 6px 19px black;">
            <h5><strong>Ilość zrealizowanych zleceń: </strong></h5>
            <h1><strong>{{$ordersEnded->count()}}</strong></h1>
        </div>
        <div class="col-3 p-4 rounded-3" style="box-shadow: 6px 6px 19px black;">
            <h5><strong>Ilość aktywnych zleceń: </strong></h5>
            <h1><strong>{{$ordersInProgress->count()}}</strong></h1>
        </div>
    </div>
    <br>
</div>

@endsection

@section('js-scripts')
<script type="text/javascript">
    function currentTime() {
    var date = new Date(); /* creating object of Date class */
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var midday = "AM";
    midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
    //hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
    hour = changeTime(hour);
    min = changeTime(min);
    sec = changeTime(sec);
    //document.getElementById("digit_clock_time").innerText = hour + " : " + min + " : " + sec + " " + midday; /* 12 hour format*/
    document.getElementById("digit_clock_time").innerText = hour + " : " + min + " : " + sec; /* adding time to the div */
    
    var months = ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'];
    var days = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
    
    var curWeekDay = days[date.getDay()]; // get day
    var curDay = date.getDate();  // get date
    var curMonth = months[date.getMonth()]; // get month
    var curYear = date.getFullYear(); // get year
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear; // get full date
    document.getElementById("digit_clock_date").innerHTML = date;
    
    var t = setTimeout(currentTime, 1000); /* setting timer */
    }
    
    function changeTime(k) { /* appending 0 before time elements if less than 10 */
    if (k < 10) {
        return "0" + k;
    }
    else {
        return k;
    }
    }
    
    currentTime();
</script> 
@endsection