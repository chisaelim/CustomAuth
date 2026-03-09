<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/css/vendors.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app"></div>


    <script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ asset('assets/js/common-init.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/theme-customizer-init.min.js') }}"></script>
</body>

</html>
