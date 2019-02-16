<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            @guest
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-info font-weight-bold"
                           href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item active">
                    <a class="nav-link text-info font-weight-bold" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" href="{{ url('/') }}">Rooms & Beds</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" href="{{ url('/') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" href="{{ url('/') }}">Foods & Beverages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" href="{{ url('/') }}">Facilities</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning font-weight-bold" href="#"
                       data-target="#dropDownList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropDownList" id="dropDownList">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
