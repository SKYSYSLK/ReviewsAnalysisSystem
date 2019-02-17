<div class="col-md-3">
    <div class="card h-100">
        <div class="card-body"> Suitable image here</div>
    </div>
</div>
<div class="col-md-9">
    @if (Auth::user()->role_id!=0)
        <form method="post" action="/home/review" class="h-100">
            @csrf
            <div class="card h-100">
                <div class="card-header">
                    Testing summary option
                    <label for="comment"> Review </label>
                </div>
                <div class="card-body pb-0">
                    <textarea class="form-control" id="review" name="review" rows="5"></textarea>
                    <button type="submit" class="btn btn-info mt-3">Submit</button>
                </div>
            </div>
        </form>
    @endif
    @if (Auth::user()->role_id!=1)
        <div class="card h-100">
            <div class="card-body">
                <div class="">
                    <label for="Summary">Summary</label>
                    <textarea class="form-control" id="review" rows="5" disabled></textarea>
                </div>
            </div>
        </div>
    @endif
</div>
