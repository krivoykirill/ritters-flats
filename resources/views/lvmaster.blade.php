<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <title>Ritters</title>
</head>

<body class="bg-green-200 font-sans">
    @include('layouts.lvheader')
    @yield('content')
    
    @include('layouts.lvfooter')
    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('js')
</body>

</html>