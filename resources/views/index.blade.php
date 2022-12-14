@extends('../layouts/mainapp')

@section('title', 'Dashboard')
@section('pagetitle', 'Dashboard Admin')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
        <div class="card">
            <div class="card-body p-3">
            <h3 class="box-title">Total Visit</h3>
            <ul class="list-inline two-part d-flex align-items-center mb-0">
                <li>
                    <div id="sparklinedash"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </li>
                <li class="ms-auto"><span class="counter text-success">659</span></li>
            </ul>
        </div>
        </div>
    </div>
</div>
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
            <div class="card">
                <div class="card-body p-3 ">
                    <h3 class="box-title">Total Page Views</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                    <div id="sparklinedash2"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">869</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="white-box analytics-info">
        <div class="card">
                <div class="card-body p-3 ">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                <li>
                    <div id="sparklinedash3"><canvas width="67" height="30"
                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                    </div>
                </li>
                <li class="ms-auto"><span class="counter text-info">911</span>
                </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection