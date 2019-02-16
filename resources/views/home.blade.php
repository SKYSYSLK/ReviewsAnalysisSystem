@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">Dashboard</div>--}}

    {{--<div class="card-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success" role="alert">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--You are logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="">
        <br>
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">Dashboard</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card card-stats card-warning">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Visitors</p>
                                                <h4 class="card-title">1,294</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-newspaper-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Subscribers</p>
                                                <h4 class="card-title">1303</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats card-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Order</p>
                                                <h4 class="card-title">576</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Sales</p>
                                                <h4 class="card-title">$ 1,345</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <br>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="">
                                        <div class="card-header">
                                            <h4 class="card-title">Overall Statistics</h4>
                                            <p class="card-category">
                                                Statistic Graph</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="mapcontainer">
                                                <div class="">
                                                    <span>Graph Here</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <div class="card card-stats">
                                            <div class="card-body">
                                                <p class="fw-bold mt-1">Statistic</p>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="icon-big text-center icon-warning">
                                                            <i class="la la-pie-chart text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 d-flex align-items-center">
                                                        <div class="numbers">
                                                            <p class="card-category">Number</p>
                                                            <h4 class="card-title">150GB</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="icon-big text-center">
                                                            <i class="la la-heart-o text-primary"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 d-flex align-items-center">
                                                        <div class="numbers">
                                                            <p class="card-category">Followers</p>
                                                            <h4 class="card-title">+45K</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row card row-card ">
                    <div class="row">
                        <div class="col-md-2 mt-3 p-3 pl-3">
                            Suitable image here
                        </div>
                        @if (Auth::user()->role_id!=0)
                            <form method="post" action="/home/review">
                                @csrf
                                <div class="col-md-6">
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="">
                                                {{--testing summary option--}}
                                                <label for="comment">Review</label>
                                                <textarea class="form-control" id="review" name="review"
                                                          rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        @endif
                        @if (Auth::user()->role_id!=1)
                            <div class="col-md-4">
                                <br>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <label for="Summary">Summary</label>
                                            <textarea class="form-control" id="review" rows="5" disabled></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="row">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <div class="card card-stats">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="la la-pie-chart text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Number</p>
                                                    <h4 class="card-title">150GB</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-stats">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-bar-chart text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Revenue</p>
                                                    <h4 class="card-title">$ 1,345</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-times-circle-o text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Errors</p>
                                                    <h4 class="card-title">23</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="icon-big text-center">
                                                    <i class="la la-heart-o text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-category">Followers</p>
                                                    <h4 class="card-title">+45K</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-warning p-10" style="min-height: 215px">Image slider here</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
