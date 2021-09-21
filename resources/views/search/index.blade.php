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

        <input type="hidden" id="_token" value={{ csrf_token() }}>
        
        
        <h6> Search Volunteer </h6>
        <div id="noPosition" class="my-5" style="display: none">
            <div class="text-center">
                <h3 class="text-danger">Location not authorized. Please check your location permissions settings.</h3>

            </div>
        </div>


        <div class="d-flex justify-content-center">
            <div id="mapid"></div>

        </div>

        {{-- Scripts --}}

        <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, positionNotFound);
                } else {}
            }

            function positionNotFound() {
                let position = document.getElementById("noPosition");
                position.style.display = "block";
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


            function requestUser(volunteerId) {
                postRequestUser(volunteerId, '{{ route('work.request', ['id' => session('userid')]) }}')
            }
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
        </script>


        <script src="{{ asset('assets/js/hire.js') }}"></script>

        {{-- end of scripts --}}
    </div>
@endsection
