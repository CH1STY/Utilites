@extends('layout')


@section('content')
    <div class="container-fluid top-container">
        <h1 class="text-center">OTP LOGIN</h1>

        <form onsubmit="submitForm(event)" class="mx-3 loginForm">
            <input type="hidden" id="csrf" name="_token" value="{{ csrf_token() }}" />
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input oninput="emailChanged()" type="email" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div id="msgDiv" class="text-center">
               
            </div>
            {{-- Dynamic Div --}}
            <div id="dynamicPart">

            </div>
            {{-- Dynamic Div --}}
            <div id="buttonDiv">
                <button onclick="getCode()" id="btnGetCode" type="submit" class="btn btn-primary">Get Code</button>
            </div>
        </form>
        <div class="mx-3 mt-3 loginForm">
            <a href="{{ route('login') }}">
                <button class="btn btn-warning">Regular Login</button>
            </a>
        </div>
        @if (session('loginFailed'))
            <h5 class="text-danger mt-3 text-center">Login Failed!</h5>
        @endif
    </div>

    <script src="{{asset('assets/js/otp.js')}}"></script>
    
@endsection
