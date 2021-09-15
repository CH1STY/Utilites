<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>OVMS</title>
</head>

<body>
    @include('dashboard.component.navbar')

    <div>

        @yield('content')
    </div>

    @include('dashboard.component.footer')

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>
