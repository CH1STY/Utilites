<h3 class="text-center">Volunteer Work Profile</h3>

@if (session('msg'))
    <h4 class="text-center text-success">{{ session('msg') }}</h4>

@endif
<input type="hidden" id="_token" value={{ csrf_token() }}>

<form class="w-50 m-auto" method="post" action="{{ route('volunteer.update') }}">
    @csrf

    <div class="">
        <label for=" worktype">WorkType</label>
        <select name="worktype" class="form-select" required id="">
            <option value="heavyA">HeavyA</option>
            <option value="heavyB">HeavyB</option>
            <option value="heavyC">HeavyC</option>
            <option value="moderateA">ModerateA</option>
            <option value="moderateB">ModerateB</option>
            <option value="moderateC">ModerateC</option>
            <option value="liteA">LiteA</option>
            <option value="liteB">LiteB</option>
            <option value="liteC">LiteC</option>
        </select>
    </div>

    <div class="">
        <label for=" area">Area</label>
        <select class="form-select" name="work_area" required id="">
            <option value="dhaka">Dhaka</option>
            <option value="chittagong">Chittagong</option>
            <option value="shylhet">Sylhet</option>
        </select>
    </div>
    <div class="">
        <label for=" area">Availability</label>
        <select class="form-select" name="availablity" required id="">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <input type="hidden" id="longitude" name="longitude">
    <input type="hidden" id="latitude" name="latitude">
    <div id="submitBtn" class="text-center my-3">
        <button type="submit" class="btn btn-primary mx-3 px-5">Update</button>

    </div>
</form>

<div class="container-fluid text-center">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">JOB OFFER!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_image') }}" enctype="multipart/form-data" method="post">
                        <h5 class="text-uppercase text-success" id="work_details">

                        </h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Accept</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('assets/js/workFetch.js') }}"></script>

<script>
    var isFounded = false;
    document.addEventListener("DOMContentLoaded", async function() {

        var myModal = await new bootstrap.Modal(document.getElementById("exampleModal"), {
            keyboard: false,
        });


        setInterval(function() {
            if(!isFounded) {
                fetchWork('{{ route('work.fetch', ['v_id' => session('userid')]) }}', myModal)
            }
        }, 5000);



    });
</script>



<script>
    function modalOn() {
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
            keyboard: false
        })

        // myModal.classList.add("show");
        // myModal.style.display= "block";
        // myModal.setAttribute("aria-modal", "true");
        // myModal.setAttribute("role", "dialog");
        // myModal.removeAttribute("aria-hidden");
        myModal.show()


    }

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, failedPosition);
        } else {
            // x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function failedPosition() {
        let buttonDiv = document.getElementById("submitBtn");
        buttonDiv.innerHTML = "<h4 class='text-center text-danger'>You need to turn on your location</h4>";
    }

    function showPosition(position) {
        const {
            latitude,
            longitude
        } = position.coords;
        // console.log(latitude,longitude);
        myLocationSetter(latitude + 0.01, longitude +
            0.01); //Adding 0.01 due to working from the same latitude and longitude
    }

    getLocation();

    //23.762498400000002 90.4475341;

    function myLocationSetter(latitude, longitude) {
        document.getElementById('longitude').value = longitude;
        document.getElementById('latitude').value = latitude;
    }
</script>