@extends('dashboard.dashboardlayout')

@section('content')
    <div class="container-fluid top-container mt-2" style="min-height: 65vh">

        @include('component.sidenav')


        <div class="d-flex justify-content-end">
            <a href="{{ route('user.edit') }}">
                <button class="btn btn-primary">User Setting</button>
            </a>
        </div>
        
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Heavy Work</h5>
                        <form action="{{route('search')}}" method="get">
                            <label for="forWork">Options</label>
                            <select class="form-select" name="worktype" id="">
                                <option value="heavyA">HeavyA</option>
                                <option value="heavyB">HeavyB</option>
                                <option value="heavyC">HeavyC</option>
                            </select>
                            <label for="forWork">Area</label>
                            <select class="form-select" name="area" id="">
                               <option value="dhaka">Dhaka</option>
                               <option value="chittagong">Chittagong</option>
                               <option value="shylhet">Sylhet</option>
                            </select>
                            <div class="text-center m-2">

                                <button type="submit" class="btn btn-primary">Search Volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>

                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>

                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
