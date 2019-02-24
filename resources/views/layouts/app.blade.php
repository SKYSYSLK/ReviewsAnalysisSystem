<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body class="parallax">

<div class="wrapper" id="app">
    @include('layouts.navigation')
    @yield('content')
    @include('layouts.footer')
</div>

<!-- Modal -->
{{--<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"--}}
{{--aria-hidden="true">--}}
{{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header bg-primary">--}}
{{--<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--<span aria-hidden="true">&times;</span>--}}
{{--</button>--}}
{{--</div>--}}
{{--<div class="modal-body text-center">--}}
{{--<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>--}}
{{--<p>--}}
{{--<b>We'll let you know when it's done</b></p>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

</body>
@include('layouts.scripts')
</html>
