@extends('layouts.app')

@push('page-css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END: Vendor CSS-->
	<link rel="stylesheet" href="{{asset('app-assets/css/pages/dashboard-ecommerce.min.css')}}">
@endpush

@section('content')
<div class="row">
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="success">{{App\Models\User::count()}}</h3>
								<h6>Users</h6>
							</div>
							<div>
								<i class="icon-users success font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="info">{{App\Models\Orders::count()}}</h3>
												<h6>Total Orders</h6>
										</div>
										<div>
												<i class="icon-basket-loaded info font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="warning">{{settings('app_currency','$')}} {{$total_income}}</h3>
												<h6>Last 30 Days Income!</h6>
										</div>
										<div>
												<i class="la la-money warning font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>

	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="danger">{{settings('app_currency','$')}} {{$total_expense}}</h3>
												<h6>Last 30 Days Expenses!</h6>
										</div>
										<div>
												<i class="icon-bar-chart danger font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>

</div>
<!-- Products sell and New Orders -->
<div class="row match-height">
	<!-- Pie Chart -->
	<div class="col-md-6 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Resource PieChart</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					{!! $pieChart->render() !!}
				</div>
			</div>
		</div>
	</div>
	<!-- /Pie Chart -->	
    {{-- <div class="col-xl-6 col-6" id="ecommerceChartView">
        <div class="card card-shadow">
        <div class="card-header card-header-transparent py-20">
            <div class="btn-group dropdown">
            <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
            <div class="dropdown-menu animate" role="menu">
                <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                <a class="dropdown-item" href="#" role="menuitem">profit</a>
            </div>
            </div>
            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
            <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
            </ul>
        </div>
        <div class="widget-content tab-content bg-white p-20">
            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
        </div>
        </div>
    </div> --}}
    
</div>
<!--/ Products sell and New Orders -->
@endsection

@push('page-js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/charts/chartist.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
    <!-- END: Page Vendor JS-->
	<script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>
	<script src="{{asset('app-assets/vendors/js/charts/chart.min.js')}}"></script>
@endpush