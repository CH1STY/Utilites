@extends('layout')

@section('content')

<div class="container top-container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="text-center">Map Part</h1>
        </div>
        <div class="col-lg-4">
            <div class="card chat-card" id="name-area">
                <h4 class="text-center" id="name-area">{{ session('username') }}</h4>
                <ul class="list-group list-group-flush pt-3">
                    <div class="" id="messages">
                        {{-- @if ($user->usertype == "Volunteer")
                        <h3>{{ $user->username }}</h3>
                        @endif
                        @if ($user->usertype == "User")
                        <h3>{{ $user->username }}</h3>
                        @endif --}}
                        <h4>{{ session('username') }}</h4>

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
    startChatFetching({{ $id }}, {{ session('userid') }});
</script>


@endsection