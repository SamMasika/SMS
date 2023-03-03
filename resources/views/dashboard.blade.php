@extends('layouts.master')

@section('content')

<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cart-outline"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">$9851</h3>
            </div>
            <div class="clearfix"></div>
            <p class=" mb-0 m-t-20 text-muted">Total Sales: $22506 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>10.25%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">3514</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Total Orders: 892541 <span class="float-right"><i class="fa fa-caret-down text-danger m-r-5"></i>8.38%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cube-outline"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">5210</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Total Users: 95,251 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>3.05%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-btc"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">32,548</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Average Visitors: 24,511 <span class="float-right"><i class="fa fa-caret-up text-success m-r-5"></i>22.58%</span></p>
        </div>
    </div>
</div>
<!-- end row -->



@endsection
