<div class="col-md-3">
    <div class="card" style="border-radius: 10px">
        {{--<img class="img-thumbnail" src="{{ asset('assets/img/reviews.jpg') }}" style="height: 295px;padding-bottom: 50px;padding-top: 50px;margin-bottom: -30px" >--}}
        {{--<div class="card-body">--}}

        {{--</div>--}}
    </div>
</div>
<div class="col-md-9" >
    {{-- view for customers --}}
    @if (Auth::user()->role_id!=0)
        <form method="post" action="/home/review" class="h-100">
            @csrf
            <div class="card h-100" style="background-color: rgba(255, 191, 0,0.2)">
                <div class="card-header font-weight-bold bg-warning">
                    Insert Your Review
                </div>
                <div class="card-body row pb-0">
                    <div class="col-md-8">
                        <textarea class="form-control text-dark" id="review" name="review" rows="5" required style="opacity: 0.5"></textarea>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info mt-3 btn-block btn-warning">Submit</button>
                            </div>
                            <div class="col-md-6">
                                <button type="reset" class="btn btn-info mt-3 btn-block btn-warning">Clear</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body border text-light">
                            <p class="font-weight-bold">Select the type of Review</p>
                            <input class="float-left ml-5 mt-1" type="radio" name="category" value=1 required>
                            <p class="ml-5">Rooms & Beds</p>
                            <input class="float-left ml-5 mt-1" type="radio" name="category" value=2 required>
                            <p class="ml-5">Services</p>
                            <input class="float-left ml-5 mt-1" type="radio" name="category" value=3 required>
                            <p class="ml-5">Foods & Beverages</p>
                            <input class="float-left ml-5 mt-1" type="radio" name="category" value=4 required>
                            <p class="ml-5">Facilities</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

    {{-- view for administration --}}
    @if (Auth::user()->role_id!=1)
        <div class="card h-100">
            <div class="card-body">
                <div class="">
                    <label for="Summary">Summary</label>
                    <textarea class="form-control" id="review" rows="5" disabled>
                        {{$summary}}
                    </textarea>
                </div>
            </div>
        </div>
    @endif
</div>
