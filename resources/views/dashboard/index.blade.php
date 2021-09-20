@extends('dashboard.dashboardlayout')

@section('content')
    <div class="container-fluid top-container mt-2" style="min-height: 65vh">

        @include('component.sidenav')


        <div class="d-flex justify-content-end">
            <a href="{{ route('user.edit') }}">
                <button class="btn btn-primary">User Setting</button>
            </a>
        </div>
        
       @if($user->usertype=="Volunteer")    
        @include('volunteer.volunteerDashboard')

       @else
        @include('user.userDashboard')

       @endif


    </div>

@endsection
