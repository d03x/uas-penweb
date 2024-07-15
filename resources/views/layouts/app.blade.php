<!DOCTYPE html>
<html lang="en">
<head>
    @include("_shared.head")
    @yield('head')
    @stack('head')
</head>
<body @class($class ?? '')>
    @yield('content')
    @yield('footer')
    @stack('footer')
</body>
</html>