@extends('layout')


@section('content')
    <div class="container-fluid top-container">
        <h1 class="text-center">Registration</h1>
       
        <form  method="post" enctype='multipart/form-data' class="mx-3 loginForm">
            @csrf

            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleInputFirst_name1" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputFirst_name1" >
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleInputLast_name1" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputLast_name1" >
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="exampleInputUsername1" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone1" class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control" id="exampleInputPhone1">
            </div>
            <div class="mb-3">
                <label for="exampleInputGender1" class="form-label">Gender</label><br>
                
                <input class=""  type="radio" name="gender"  value="male"> <span class="ps-1">Male</span> 
                <input class="ms-3"  type="radio" name="gender"  value="female"> <span class="ps-1">Female</span> 
                <input class="ms-3"  type="radio" name="gender"  value="other"> <span class="ps-1">Other</span> 
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress1" class="form-label">Adress</label>
                <input type="text" name="address" class="form-control" id="exampleInputAddress1" >
            </div>
            <div class="mb-3">
                <label for="exampleInputDate_of_birth1" class="form-label">Date of birth</label>
                <input type="date" name="date_of_birth" class="form-control" id="exampleInputDate_of_birth1" >
            </div>
            <div class="mb-3">
                <label for="exampleInputNational_id1" class="form-label">NID</label>
                <input type="number" name="national_id" class="form-control" id="exampleInputNational_id1">
            </div>
            <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="row">
                                        <label class="label">Upload Image</label>

                                    </div>
                                    <div class="row">
                                        <input class="mt-3" type="file" name="myfile">

                                    </div>
                                </div>
                            </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="exampleInputNational_id1" class="form-label">User Type</label>
                <select  type="dropdown" name="usertype" class="form-select w-50" >
                <option>User</option>
                <option >Volunteer</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
       
        
    </div>

    


@endsection