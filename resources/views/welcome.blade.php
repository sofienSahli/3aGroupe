@extends('layouts.wel')

@section('content')
    <div class="container-fluid " style="padding-left: 0px ; padding-right: 0px ;">

        <div class="row bg-white">
            <div class="col-sm">

                <img src="{{asset($compagny->logo )}}" class="img-thumbnail"
                     style="margin:  5px; ">
            </div>
            <div class="col-sm jumbotron" style="margin: 5px;">
                <h1> {{ $compagny->name }}</h1>
                <p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJsSURBVGhD5dlLqE1RHMfx45GISF4jr0R5JUQMMTHC1KMoDAwkmcijRAZmSjGQobwKA4Uyk+dEJCJKGYgkz+Tt+xucOq1+97T2ueue/ZdffWb33vXr7r32WnvtRmb6YQ2OYS/G4p/JSFzBnxavMR/hMwEP0Vq+6S3GI2wWQ/9pV77pOgYgXGbjPVzp1B6EiiboS7iyzldMQ5ichivazmWEyCK4gjmWofachyuX4wZqzWh8gyuXawpqy2q4UlWsRW05DFeqio2oLXqSuFJVzEJtuQNXKpceALXmEVyxHHoCDUet6fQKXMAQ1J5LcAV78gO70B8hcgSuqPMLKxAq6+DKOrpa4aJV1JV1tiNkenr7Su1DyOyEK5y6hpCZiJ9wpVtpEk9GyJyCK506i5CZg99wpVNLEDIX4QqnHmMowkX3t17WXenUGYTMfrjCTsh1YTCewBVOaV+0FOGyAN/hSqd0ELYQ4bIbrrDzDnqKVYmutHa196ADtavQvmwgikRnn1p5XWHnDWYiJ5PwAO7v3Md0FMkYPIcbyPmAlWiXeXgF9/tNX7AeRaID309wAzlaDA9iENLo20Lu4bEcgj6y9Dp6icnZK7V6hm3QP0C0YfwM97PtnESRo/zNyN1qlHYO7opWTu62uy8cRZHo/nYD9DVd/bkokiprREn6UlosW9HtObEDRbMKH+EGK00Lpdal4pmBp3CDlqJPu9qf9VlG4ATc4L2l9WQqupLleAFXpBN3MQ5djQ589aKje9aVyqGt/AEUWbw6zTBswU24ko6K63Qkd1fbtege3gTNk9vQpNfE1O12C8exAaPwP6TR+At3EubbH20g+gAAAABJRU5ErkJggg==">

                    Telephone : {{ $compagny->telephone }}
                </p>

                <p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALuSURBVGhD7dhLqIxhHMfxIUQRoiQLl2yk5FoUkftl47YgibDRScrKgigpxYJihWThsiALd2Jl4X7PApFIRCmXkOv39zbP9HjmP++8844z5516f/Wpc975zznn/8y8/+eZU8iTJ0+ePP8rHbAYB3AOFzPmKNaiB8oyAHfxpwm8x0yU0h1PYBVn1XeMQpTNsIqy7gqiPIJV0Az6IXo5vuAjrKKs+YV3xa8nofTANRyEGnLXskbT8QTUhL6fg38KnmEeDsEVZcFVLMBZ75qUNSBfsQIjoI7DxxvpMRZiDJ4Xr/nMBpy96IwpuFm81iivsRraXFdBi2rVxTYgN9Af7bAIrb1faJBsQFdo8fbDqnOqNiDa+WZA6YQWvIVVm5YGxy70hjIQt2DV+hI1ILqhN6I9FK2QNsBPsOqT0s89jEFwmQUtmlUfStyAcwo94dIHe5Bm9F6ABoWLFkeLUsv0q7kB0agdDj+DodPib1jP8d3GNPjphTOw6uOkakA0FZYjzGhcgvWcp9BxXQPBz0hoUaznVJO6AdFqj4cVHXe10qrTtr8GGgBhuuENwp+dVF0NrENc9J7WDakbPi7jkPYclrqB9fCzDJpS1iqHmY9t0Jx3mQAdKK3fFSdVA5vgoo93R+Aee4CxsNIXx+Fq72EoXCaj1iZqbmALXCbiBcIajcGdcG8d3bQr8QFhrYaB7g93Y0/HN4R1ldTUwHYoHbEVP2HVOTp8LcVl71olp6E9RZmNpPtK4ga0oorm/XVYNfXS8ST6g8hcJGkiUQPaad3boN6jQzUazbvRBTpGV3uVqzawD9olj3nXGuEhhkEbX1wTsQ3oH1xT8dK71ki6mbXXaMevdD6q2IBWfAdqOVi1lvPQZwTrnBU1EP6R93EnuNbWdBxRI2ET0aHwlXdBzfzwvs+acDINQXSj+hebhfaZaAPUbE9zDmlrS1CKdr/PsAqzSCeBsuiV0NtJYzML0yekz8knEf07MU+ePHny5CkUCoW/BV9JztNjwIgAAAAASUVORK5CYII=">
                    E-mail : {{ $compagny->emailGerant }}

                </p>
                <p>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPySURBVGhDzdpryE1ZHMfxx7UYNeNuqMm45ha55YUoIyUpZIYoRUlSElJ4QaZGUiJixmXQjBdKXiBRqNG8wAtvpihklNxvM8l1Lnx/PH8t61l7r733c/ZxfvUpZz/rrLP+Z6+zb0sdOY9ZaKkXFc5nmIF9+A0XcAzrMARF0wN7MEEv3tS7g7XogkpkPm7D+g85Ag0ma3piL/6B3j8JDTp9hQMYiSJpBn07fr9JHmI00tIb2os2cBMswKXpNRtJ06sVFuPrd6/eZxNCfaX5C33hpw/2wx+4iRZg/OllA7+F37WhPmMRen8W59AESgv8gn8RamsaFHAF171tLk2vw9DAbZsOAJazcNvL/9gBTcle+A76HL+dTIblMvy//+e9blCA5r7m8BScrt8Wox+W0hUarP/3OfCjPagjkt/2V1i2wLbfx0oscLZJsAA3A7ETz+C2M09gu13frP/3k0jKYPjtb8CyCPewHG20gWhvu+2jBVjaYQWuQu1U0M/QlLAsgduXLENaNEC3vaao5Uu0fv/PDylcgJvPoWnmZy7cvkS7PSnac4/gttdUSUtFCkjKKLh9iQ7DTRHKN/Dbn0JaSi2gOe7C7U/WwE9nXIPfdiHSUmoByka4/ZnjmIYxWAp/6shzfIG0lF6ADqlJZ82YbYil9AKU3XD7zELffjfEUpUCukOHQ7ffmM3IkqoUoGyH228anVOyXsJXrQBNhxdw+06iH37WVK0Axb2WSfIUnZA1VS1Ax/qkayizHnlS1QKUDXD7d/2N9siTaAEn0B+xE0rWaHroEOl+hskz9y3RAly6odiF8Ui6nskSXY77fetk9xXyJlcBrj8wEUWiPer3dwhFUrgA8yN0v5o3F+H28y2KpNEFiB5Q6dauH7JmNez9Oj/YHVbeVKQAoxvsrQjd3Phxbx91oCiaihZgdKiMRfcKdn30gzYUTCkF6IiiH2osl/AYsZuWtJRSgBxENVJaAfo9DEXZKa0A0YmvA8pMqQWIHkzNwwDoobAehYsu2qZDj2Qak9ILiNF10U8ouqc+eQHmAYqsP9RMAaKbmWHIk5oqQPTD959/pqXmChBdJ2VNTRaghcCsK6Q1WYDMRCy6nvIfXdZMATpXJEUD17kltPT1roDYk4PGCD3EDXFXZixpAzfjUNcWWn35E6FGRehD9eEahFbktW4ce9D1PbQqozu+2MCPYjg+im5MpuIMQm/Kwh24H519tWJzE6H3ymu4K6C+4MBDGYS0xT1f2sD9qI0WBENLskk08BHIHVvcS5peeQYeii7BtVj4EqH+Cw/cj6aXVlhsetnAizyhCKUjVsGmV8UGHor+40WlBu5He1L9Z0xd3VuVX3NX0+RAMwAAAABJRU5ErkJggg==">
                    Address: {{$compagny->address}}
                <div id="map" style="height: 400px ; width: 100%;"></div>


                </p>
            </div>
        </div>
        <script>
            function initMap() {
                var uluru = {lat: -25.344, lng: 131.036};
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 4, center: uluru});
                var marker = new google.maps.Marker({position: uluru, map: map});
            }
        </script>
        <!--Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        -->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZCCAtzZDufpjF7Z-xXA2pRNO1lhWpMZg&callback=initMap">
        </script>

        <!--


                     <div class="col-4 " style="box-shadow: #6c757d; background-color: #636b6f; height: 200px; ">
                         <ul class="nav flex-column">
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Link</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link disabled" href="#">Disabled</a>
                             </li>
                         </ul>

                     </div>
                     <div class="col-8">

                             <div class="card text-dark"
                                  style="padding-bottom: 20px ; margin-top: 20px ; padding-bottom: 20px ; padding-right: 20px; padding-left: 20px;  ">
                                 <div class="card-body">
                                     <h4 class="card-title"></h4>
                                     <p class="card-text"></p>
                                 </div>
                                 <img class="card-img-bottom img-fluid" src="" alt="Card image">
                             </div>


                     </div>
     -->

        @foreach($comp as $post)
            <div class=" row" style="margin: 20px; margin-left: 3%; margin-right: 3%; ">

                <div class="card col-8 col-sm-12">
                    <a href="#">
                        <img class="img-fluid card-img-top" src="{{ asset($post->image)}}" alt=""
                             style="height: 300px; margin-top: 4px;">
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{$post->title}}</h3>
                    <p class="card-text">{{$post->description}}</p>
                </div>
            </div>
            <hr>
            {{ $comp->links() }}

        @endforeach
    </div>
    </div>
@endsection

