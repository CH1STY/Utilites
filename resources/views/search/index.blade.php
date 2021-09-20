@extends('dashboard.dashboardlayout')

@section('content')
    {{-- to fix the navbar area --}}
    <div class="container-fluid top-container">

        {{-- imports --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        {{-- imports --}}
        <style>
            #mapid {
                height: 350px;
                width: 80%;
            }

        </style>

        <h6> Search Volunteer </h6>
        <div class="d-flex justify-content-center">
            <div id="mapid"></div>

        </div>

        {{-- Scripts --}}

        <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                const {
                    latitude,
                    longitude
                } = position.coords;
                // console.log(latitude,longitude);
                myLocationSetter(latitude, longitude);
            }

            getLocation();
        </script>


        <script>
            function myLocationSetter(latitude, longitude) {
                var mymap = L.map('mapid').setView([latitude, longitude], 13);
                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                    attribution: 'OVMS',
                    maxZoom: 18,
                    // zoom: 16,
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1,
                    accessToken: 'pk.eyJ1IjoiY2gxc3R5IiwiYSI6ImNrdHJlMm02bDE1a2wycG85dDF0MDIyMnoifQ.cBXlMRYQRO0ZS0X8sgIaSg'
                }).addTo(mymap);

                
                {!! $markerScript !!}
                
                L.marker([latitude, longitude]).addTo(mymap)
                    .bindPopup('Your Current Location')
                    .openPopup();
             

            }

            function callUser(phone) {
                window.open(`tel:${phone}`);
            }

        </script>


        

        {{-- end of scripts --}}
    </div>
@endsection
