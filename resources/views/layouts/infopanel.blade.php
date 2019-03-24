<div class="card card-stats" style="background-color: rgba(255, 191, 0,0.3)">
    <div class="card-header bg-warning">
            <p class="fw-bold mt-1 text-light">Informations</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class=" col-4">
                <div class="icon-big text-center icon-warning">
                    <i class="la la-group text-light"></i>
                </div>
            </div>
            <div class="col-7 d-flex align-items-center">
                <div class="numbers text-light">
                    <p class="card-category text-light">Customers</p>
                    <h4 class="card-title text-light">{{$staticData[0]}}</h4>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-4">
                <div class="icon-big text-center">
                    <i class="la la-heart-o text-light"></i>
                </div>
            </div>
            <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                    <p class="card-category text-light">Reviews</p>
                    <h4 class="card-title text-light">{{$staticData[1]}}</h4>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-4">
                <div class="icon-big text-center">
                    <i class="la la-clock-o text-light"></i>
                </div>
            </div>
            <div class="col-7 d-flex align-items-center">
                <div class="numbers">
                    <p class="card-category text-light">System Time & Date</p>
                    <h4 class="card-title text-light">{{$staticData[2]}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
