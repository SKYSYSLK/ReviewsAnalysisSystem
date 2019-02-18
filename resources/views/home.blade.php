@extends('layouts.app')

@section('content')
    <main>
        <div class="content">
            <div class="container-fluid">
                <div class="row my-5"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        @include('layouts.dashboard')
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        @include('layouts.graph')
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        @include('layouts.infopanel')
                    </div>
                </div>
                <div class="row mb-4">
                    @include('layouts.addreview')
                </div>
                <div class="row">
                    @include('layouts.statistics')
                </div>
            </div>
        </div>
    </main>
@endsection
