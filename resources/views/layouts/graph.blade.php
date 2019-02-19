<div class="card h-100">
    <div class="card-header">
        <h4 class="card-title">Overall Statistics</h4>
        <p class="card-category">
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
