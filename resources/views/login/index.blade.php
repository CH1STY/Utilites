@extends('layout')


@section('content')
<div class="container-fluid top-container">
    <h1 class="text-center">LOGIN</h1>
    @if (session('msg'))
    <h4 class="text-center text-success">{{ session('msg') }}</h4>
    @endif
    <form method="post" class="mx-3 loginForm">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="{{old('email')}}" type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input value="{{old('password')}}" type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



    <div class="mx-3 mt-3 loginForm">
        <a href="{{ route('otplogin') }}">
            <button class="btn btn-warning">Login Via OTP</button>
        </a>
    </div>

    @if (session('loginFailed'))
    <h5 class="text-danger mt-3 text-center">Login Failed!</h5>
    @endif

</div>




@endsection