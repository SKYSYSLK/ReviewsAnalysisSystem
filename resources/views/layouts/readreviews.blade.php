<div class="card">
    <div class="card-header pb-0">
        <p class="font-weight-bold font-italic">{{$review->user->firstName}} {{$review->user->lastName}}</p>
    </div>
    <div class="card-body">
        <p>{{$review->review}}</p>
    </div>
    <div class="card-footer">
        <div class="row">
            {{--<div class="col-md-6">--}}
                {{--{{$count=round($review->score*100/20)}}--}}
            {{--</div>--}}
            <div class="row col-md-4">
               <?php $count=round($review->score*100/20)?>
                @if($count<=0)
                    @for($i=0;$i<5;$i++)
                        <i class="far fa-star" style="color: #ffa500"></i>
                    @endfor
                @else
                    @for($i=0;$i<$count;$i++)
                        <i class="fas fa-star" style="color: #ffa500"></i>
                    @endfor
                    @for($i=0;$i<(5-$count);$i++)
                        <i class="far fa-star" style="color: #ffa500"></i>
                    @endfor
                @endif
            </div>
            <div class="col-md-6">
                {{$review->category_id}}
            </div>

        </div>
    </div>
</div>
