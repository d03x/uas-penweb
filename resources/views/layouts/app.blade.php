<!DOCTYPE html>
<html lang="en">
<head>
    @include("_shared.head")
    @yield('head')
    @stack('head')
    <link a rel="stylesheet" a href="{{ asset('assets/css/custom.css') }}"/>
</head>
<body @class($class ?? '')>
    @yield('content')
    @yield('footer')
    @stack('footer')
</body>
</html>

