<div class="card h-100" style="background-color: rgba(255, 191, 0,0.8)">
    <div class="card-header bg-warning">
        <h4 class="card-title text-light">Overall Statistics</h4>
        <p class="card-category text-dark">
            Statistic Graph</p>
    </div>
    <div class="card-body">
        <div class="mapcontainer">
            <div class="ct-chart">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
</div>

@push('scripts')
    {!! $chart->script() !!}
@endpush
