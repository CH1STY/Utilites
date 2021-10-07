@extends('layout')

@section('content')

<div class="container top-container">
            {{-- imports --}}
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        {{-- imports --}}
        <style>
            #mapid {
                height: 350px;
                width: 100%;
            }

        </style>

   

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <h1 class="text-center col-8">Map Part</h1>
                <div class="col-4">
                    <button id="toggleButton" onclick="toggleDisplay()" class="btn btn-secondary mt-2" type="button">Show Path</button>

                </div>

            </div>
            <div id="mapid"></div>
        </div>
        <div class="col-lg-4">
            <div class="card chat-card" id="name-area">
                <h4 class="text-center" id="name-area">{{ session('username') }}</h4>
                <ul class="list-group list-group-flush pt-3">
                    <div class="" id="messages">

                        {{-- <li class="list-group-item sender">1</li>
                            <li class="list-group-item reciever">2</li>
                            <li class="list-group-item sender">3</li>
                            <li class="list-group-item sender">4</li>
                            <li class="list-group-item reciever">5</li>
                            <li class="list-group-item sender">6</li>
                            <li class="list-group-item sender">7</li>
                            <li class="list-group-item reciever">8</li>
                            <li class="list-group-item sender">9</li> --}}
                    </div>
                    <div class="row py-5 g-0 justify-content-around">
                        <div class="col-7">
                            <textarea id="message" class="form-control mx-3 pd-5" type="text" cols="1" rows="2" name=""
                                id=""></textarea>
                        </div>
                        <input type="hidden" id="_token" value={{ csrf_token() }}>
                        <div class="col-3">
                            <button onclick="sendMessage({{ $id }}, {{ session('userid') }})" id="sendButton"
                                class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/ongoing.js') }}"></script>

<script>


    let user = { latitude: {{$workRequest->latitude}},  longitude: {{$workRequest->longitude}} }
    let volun = { latitude: {{$volunteer->latitude}}, longitude: {{$volunteer->longitude}} }

    

    function setMapper(userlat,userlong,volunlat,volunlong) {
        var mymap = L.map('mapid').setView([userlat,userlong], 13);
                  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                      attribution: 'OVMS',
                      maxZoom: 18,
                      // zoom: 16,
                      id: 'mapbox/streets-v11',
                      tileSize: 512,
                      zoomOffset: -1,
                      accessToken: 'pk.eyJ1IjoiY2gxc3R5IiwiYSI6ImNrdHJlMm02bDE1a2wycG85dDF0MDIyMnoifQ.cBXlMRYQRO0ZS0X8sgIaSg'
                  }).addTo(mymap);
          L.marker([userlat,userlong]).addTo(mymap)
          .bindPopup('Your Current Location')
          .openPopup();
          L.marker([volunlat,volunlong]).addTo(mymap)
          .openPopup();

           L.Routing.control({
                    waypoints: [
                        L.latLng(userlat, userlong),
                        L.latLng(volunlat, volunlong)
                    ]
                }).addTo(mymap);
    }

    setMapper(user.latitude,user.longitude,volun.latitude,volun.longitude);


</script>

<script>
    startChatFetching({{ $id }}, {{ session('userid') }});
</script>

<script>
    var isToggled= false;
    function toggleDisplay(){
        let button = document.getElementById("toggleButton");
        let directions = document.getElementsByClassName("leaflet-routing-container");

        if(!isToggled)
        {
            button.innerHTML = "Hide Path";
            directions[0].style.display="block";
            isToggled=true;
            return
        }
        else
        {
            button.innerHTML = "Show Path";
            directions[0].style.display="none";
            isToggled=false;
            return 

        }
    }
</script>


@endsection