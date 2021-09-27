@extends('layout')


@section('content')
<div class="container-fluid top-container">
    <h1 class="text-center">Registration</h1>

    <form method="post" enctype='multipart/form-data' class="mx-3 loginForm">
        @csrf

        <div class="row">
            <div class="mb-3 col-6">
                <label for="exampleInputFirst_name1" class="form-label">First Name</label>
                <input value="{{old('first_name')}}" type="text" name="first_name" class="form-control"
                    id="exampleInputFirst_name1">
                @error('first_name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="exampleInputLast_name1" class="form-label">Last Name</label>
                <input value="{{old('last_name')}}" type="text" name="last_name" class="form-control"
                    id="exampleInputLast_name1">
                @error('last_name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">User Name</label>
            <input value="{{old('username')}}" type="text" name="username" class="form-control"
                id="exampleInputUsername1">
            @error('username')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="{{old('email')}}" type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('email')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="mb-3 col-6">
                <input value="{{old('password')}}" type="password" name="password" class="form-control"
                    id="exampleInputPassword1">
                @error('password')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 col-6">
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>

        </div>

        <div class="mb-3">
            <label for="exampleInputPhone1" class="form-label">Phone</label>
            <input value="{{old('phone')}}" type="number" name="phone" class="form-control" id="exampleInputPhone1">
            @error('phone')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputGender1" class="form-label">Gender</label><br>

            <input class="" type="radio" name="gender" value="male"> <span class="ps-1">Male</span>
            <input class="ms-3" type="radio" name="gender" value="female"> <span class="ps-1">Female</span>
            <input class="ms-3" type="radio" name="gender" value="other"> <span class="ps-1">Other</span>
            @error('gender')
            <br><span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputAddress1" class="form-label">Adress</label>
            <input value="{{old('address')}}" type="text" name="address" class="form-control" id="exampleInputAddress1">
            @error('address')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputDate_of_birth1" class="form-label">Date of birth</label>
            <input value="{{old('date_of_birth')}}" type="date" name="date_of_birth" class="form-control"
                id="exampleInputDate_of_birth1">
            @error('date_of_birth')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputNational_id1" class="form-label">NID</label>
            <input value="{{old('national_id')}}" type="number" name="national_id" class="form-control"
                id="exampleInputNational_id1">
            @error('national_id')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="row row-space">
            <div class="col-6">
                <div class="input-group">
                    <div class="row">
                        <label class="label">Upload Image</label>

                    </div>
                    <div class="row">
                        <input value="{{old('myfile')}}" class="mt-3" type="file" name="myfile">

                    </div>
                </div>
            </div>
            @error('myfile')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleInputNational_id1" class="form-label">User Type</label>
            <select value="{{old('usertype')}}" type="dropdown" name="usertype" class="form-select w-50">
                <option>Choose Option</option>
                <option>User</option>
                <option>Volunteer</option>
            </select>
            @error('usertype')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    {{-- @foreach ($errors->all() as $err)
                        {{$err}} <br>
    @endforeach --}}

</div>

@endsection

<script>
    function myFunction() {
        var x = document.getElementById("exampleInputPassword1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>