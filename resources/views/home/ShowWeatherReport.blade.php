<div>

    <div class="row">
        <div class="col-md-3">
            <h1>City</h1>
        </div>

        <div class="col-md-3">
            <h1>Min(&deg;C)</h1>
        </div>

        <div class="col-md-3">
            <h1>Max(&deg;C)</h1>
        </div>

        <div class="col-md-3">
            <h1>Now(&deg;C)</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h2>{{ $returnData['selectedCity']}}</h2>
        </div>

        <div class="col-md-3">
            <h2>{{$returnData['min']}}&deg;C</h2>
        </div>

        <div class="col-md-3">
            <h2>{{$returnData['max']}}&deg;C</h2>
        </div>

        <div class="col-md-3">
            <h2>{{$returnData['now']}}&deg;C</h2>
        </div>
    </div>


</div>