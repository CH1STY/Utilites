@extends('dashboard.dashboardlayout')

@section('content')


<div class="container-fluid top-container">
    
    <div class="text-end">
        <img src="{{asset('assets/images/users/user'.session('userid').'.jpg')}}" alt="" srcset="">
    </div>
</div>

@endsection