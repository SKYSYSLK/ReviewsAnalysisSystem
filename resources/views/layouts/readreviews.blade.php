<div class="card">
    <div class="card-header pb-0">
        <p class="font-weight-bold font-italic">{{$review->user->firstName}} {{$review->user->lastName}}</p>
    </div>
    <div class="card-body">
        <p>{{$review->review}}</p>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-md-6">
                {{$review->category_id}}
            </div>
            <div class="col-md-6">
                {{$review->score}}
            </div>
            <div class="row col-md-4">
                <i class="fas fa-star" style="color: #ffa500"></i>
                <i class="far fa-star" style="color: #ffa500"></i>
                <i class="fas fa-star" style="color: yellow"></i>
                <i class="fas fa-star" style="color: yellow"></i>
                <i class="fas fa-star" style="color: yellow"></i>
            </div>

        </div>
    </div>
</div>
