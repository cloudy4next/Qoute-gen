<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter App</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css"> --}}

    <!-- jQuery library -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> --}}

    <!-- Latest compiled JavaScript -->
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> --}}
</head>
<body>
    @include('inc.header')
    <div class="main-box">
        @yield('content')
    </div>
    @include('inc.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  @stack('scripts')
</body>
</html>