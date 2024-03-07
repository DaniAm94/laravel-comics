<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    @vite('resources/js/app.js')
</head>

<body>

    {{-- Header --}}
    @include('includes.header')

    {{-- Jumbotron --}}
    @include('includes.jumbotron')

    {{-- Main --}}
    @include('includes.main')


    {{-- Nav --}}
    @include('includes.nav')

    {{-- Footer --}}
    @include('includes.footer')
</body>

</html>
