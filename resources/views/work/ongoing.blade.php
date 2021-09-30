@extends('layout')

@section('content')

    <div class="container top-container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="text-center">Map Part</h1>
            </div>
            <div class="col-lg-4">
                <div class="card chat-card">
                    <ul class="list-group list-group-flush pt-3">
                        <div class="" id=" messages">
                            <li class="list-group-item sender">An item</li>
                            <li class="list-group-item reciever">A second item</li>
                            <li class="list-group-item sender">A third item</li>
                            <li class="list-group-item sender">An item</li>
                            <li class="list-group-item reciever">A second item</li>
                            <li class="list-group-item sender">A third item</li>
                            <li class="list-group-item sender">An item</li>
                            <li class="list-group-item reciever">A second item</li>
                            <li class="list-group-item sender">A third item</li>
                        </div>
                        <div class="row py-5 g-0 justify-content-around">
                            <div class="col-7">
                                <textarea class="form-control mx-3 pd-5" type="text" cols="1" rows="2" name="" id="">
                                    </textarea>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-primary">Send</button>
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
