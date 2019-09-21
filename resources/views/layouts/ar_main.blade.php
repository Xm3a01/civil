<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CivilianSD</title>
    @include('_includes.header')
    @yield('stylesheets')
</head>
<body>
     @include('_includes.ar.navbar')

     @yield('content')

     @include('_includes.ar.footer')
     @include('_includes.scripts')
     @yield('scripts')
</body>
</html>