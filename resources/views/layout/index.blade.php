<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Business Help Center | Privacy Policy</title>
    <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <script type="text/jscript" src="{{URL::asset('js/app.js')}}"></script>
</head>

<body>
    @yield('content')
</body>

</html>
