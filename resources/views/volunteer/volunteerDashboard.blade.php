<h3 class="text-center">Volunteer Work Profile</h3>

@if (session('msg'))
<h4 class="text-center text-success">{{ session('msg') }}</h4>

@endif
<input type="hidden" id="_token" value={{ csrf_token() }}>

<form class="w-75 m-auto" method="post" action="{{ route('volunteer.update') }}">
    @csrf

    <div class="row">
        <div class="col-lg-8">

            <div class="">
                <br><br>
                <label for=" worktype" class="fs-5">WorkType</label>
                <select name="worktype" class="form-select" required id="worktype">

                    <option value="Heavy-Weight Groceries">Heavy-Weight Groceries: (In
                        between 6-15 kg)</option>
                    <option value="Heavy- Weight Delivering Parcel">Heavy- Weight Delivering Parcel: (In
                        between 6-15 kg)</option>
                    <option value="Heavy-Weight Collecting Parcel">Heavy-Weight Collecting Parcel: (In
                        between 6-15 kg)</option>
                    <option value="Heavy-Weight Collecting Others">Heavy-Weight Collecting Others: (In
                        between 6-15 kg)</option>
                    <option value="Moderate-Weight Groceries">Moderate-Weight Groceries: (In
                        between 2-6 kg) </option>
                    <option value="Moderate- Weight Delivering Parcel">Moderate- Weight Delivering
                        Parcel: (In
                        between 2-6 kg)</option>
                    <option value="Moderate-Weight Collecting Parcel">Moderate-Weight Collecting Parcel:
                        (In
                        between 2-6 kg)</option>
                    <option value="Moderate-Weight Collecting Others">Moderate-Weight Collecting Others:
                        (In
                        between 2-6 kg</option>
                    <option value="Lite-Weight Groceries">Lite-Weight Groceries: (In
                        between 0-2 kg)</option>
                    <option value="Lite- Weight Delivering Parcel">Lite- Weight Delivering Parcel: (In
                        between 0-2 kg)</option>
                    <option value="Lite-Weight Collecting Parcel">Lite-Weight Collecting Parcel: (In
                        between 0-2 kg)</option>
                    <option value="Lite-Weight Collecting Medical Supplement">Lite-Weight Collecting
                        Medical Supplement </option>
                    <option value="Lite-Weight Collecting Others">Lite-Weight Collecting Others: (In
                        between 0-2 kg</option>
                </select>
            </div>
            <p class="text-justify py-1 small">Per kg 50TK in current town where company is located, Per kg 130TK charge
                outside
                the
                city.</p>
            <div class="">
                <label for=" area" class="fs-5">Area</label>
                <select class="form-select" name="work_area" required id="">
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="shylhet">Sylhet</option>
                </select>
            </div>
            <br>
            <div class="">
                <label for=" area" class="fs-5">Availability</label>
                <select class="form-select" name="availablity" required id="">
                    <option value="yes" @if($volun->availablity=='yes') selected @endif>Yes</option>
                    <option value="no"  @if($volun->availablity=='no') selected @endif>No</option>
                </select>
            </div>

            <input type="hidden" id="longitude" name="longitude">
            <input type="hidden" id="latitude" name="latitude">

            <div id="submitBtn" class="text-center my-3">
                <button type="submit" class="btn btn-primary mx-3 px-5">Update</button>

            </div>
        </div>

        {{-- new --}}
        <div class="col-lg-4">
            <div class="fs-5">
                <p class="text-center">Current Profile</p>
            </div>
            <link rel="stylesheet" href="{{ asset('assets/css/cprofile.css') }}" />
            <div class="m-3">
                <div class="card-body">

                    <div class="">
                        <div class="d-flex flex-row justify-content-between p-3 adiv text-black"> <i
                                class="fas fa-chevron-left"></i>
                            <span class="pb-3">{{ session('username') }}</span> <i class="fas fa-times"></i> </div>
                    </div>
                    <div class="chat ml-2 p-3">
                        <div class="col-md-12"><label class="labels">Work Type</label>
                            <input disabled="disabled" type="text" name="worktype" class="form-control"
                                value="{{$volun->worktype}}">
                        </div>
                    </div>

                    <div class="chat ml-2 p-3">
                        <div class="col-md-12"><label class="labels">Work Area</label>
                            <input disabled="disabled" type="text" name="work_area" class="form-control"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="chat ml-2 p-3">
                        <div class="col-md-12"><label class="labels">Availability</label>
                            <input disabled="disabled" type="text" name="availability" class="form-control"
                                value="{{ $volun->availablity }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>




<div class="container-fluid text-center">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">JOB OFFER!!</h5>
                    <button type="button" class="btn-close" id="smallCls" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h5 class="text-uppercase text-success" id="work_details">

                    </h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="acceptBtn" class="btn btn-primary">Accept</button>
                    <button type="button" id="clsBtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
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
        }, 1000);

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