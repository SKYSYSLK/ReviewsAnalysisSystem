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
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        @foreach($reviews as $review)
                            @include('layouts.readreviews')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
