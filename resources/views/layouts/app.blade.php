<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body class="parallax">

<div class="wrapper" id="app">
    @include('layouts.navigation')
    @yield('content')
    @include('layouts.footer')
</div>

</body>
@include('layouts.scripts')
</html>
