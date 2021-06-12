@extends('layouts.app')

@push('page-css')
	
@endpush

@section('content')
<div class="row">
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="success">{{$total_customers}}</h3>
								<h6>Total Customers</h6>
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
												<h3 class="info">{{$total_orders}}</h3>
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
												<h3 class="warning">${{$total_income}}</h3>
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
												<h3 class="danger">${{$total_expense}}</h3>
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
@endsection

@push('page-js')
	
@endpush