<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
<div id="app">

</div>

<div class="wrapper" id="app">

    {{--<div class="main-header bg-dark">--}}
        {{--<div class="logo-header">--}}
            {{--<a href="{{ url('/') }}" class="logo text-light">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
            {{--</a>--}}
            {{--<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"--}}
                    {{--data-target="#myNavBar" aria-controls="sidebar" aria-expanded="false"--}}
                    {{--aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}
            {{--<button class="topbar-toggler more" data-target="#myNavBar"><i class="la la-ellipsis-v"></i></button>--}}
        {{--</div>--}}
        {{--<nav class="navbar navbar-header navbar-expand-lg">--}}
            {{--<div class="container-fluid">--}}
                {{--<ul class="navbar-nav topbar-nav ml-md-auto align-items-center" id="myNavBar">--}}
                    {{--<li class="nav-item dropdown hidden-caret">--}}
                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="#">Action</a>--}}
                            {{--<a class="dropdown-item" href="#">Another action</a>--}}
                            {{--<div class="dropdown-divider"></div>--}}
                            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--@guest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--</li>--}}
                        {{--@if (Route::has('register'))--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@else--}}

                        {{--<li class="nav-item dropdown">--}}
                            {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
                               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                {{--{{ Auth::user()->name }}--}}
                            {{--</a>--}}

                            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" href="#"--}}
                                   {{--aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu dropdown-user">--}}
                                    {{--<div class="dropdown-divider"></div>--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--<i class="fa fa-power-off"></i> Logout--}}
                                    {{--</a>--}}
                                {{--</ul>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
                                      {{--style="display: none;">--}}
                                    {{--@csrf--}}
                                {{--</form>--}}
                            {{--</div>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</div>--}}

    @include('layouts.navigation')

    <main>
        @yield('content')
    </main>
</div>

@include('layouts.footer')

<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                <p>
                    <b>We'll let you know when it's done</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
@include('layouts.scripts')
</html>
