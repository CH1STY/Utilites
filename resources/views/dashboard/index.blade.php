@extends('dashboard.dashboardlayout')

@section('content')

    <div class="container-fluid top-container">

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                            width="150px" height="150px"
                            src="{{ asset('assets/images/users/user' . session('userid') . '.jpg') }}">
                            @include('dashboard.uploadModal')
                            
                            <span
                            class="font-weight-bold">{{ session('username') }}</span><span
                            class="text-black-50">user-email</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">First Name</label><input type="text"
                                    class="form-control" placeholder="first name" value="{{ $user->first_name }}"></div>
                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text"
                                    class="form-control" value="" placeholder="username"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text"
                                    class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">Email Address</label><input
                                    type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                            <div class="col-md-12"><label class="labels">Phone</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                    class="form-control" placeholder="enter address line 2" value=""></div>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDate_of_birth1" class="form-label">Date of birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="exampleInputDate_of_birth1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNational_id1" class="form-label">NID</label>
                            <input type="number" name="national_id" class="form-control" id="exampleInputNational_id1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputNational_id1" class="form-label">User Type</label>
                            <select type="dropdown" name="usertype" class="form-select w-50">
                                <option>User</option>
                                <option>Volunteer</option>
                            </select>
                        </div>


                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
