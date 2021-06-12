@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Measurements</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="#">Measurement</a>
			</li>
			<li class="breadcrumb-item active">All Customer Measurements
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Order'" :target="'#add-order'" />
@endpush

@section('content')

<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
			<h4 class="card-title">Orders List</h4>
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
            <div class="card-body card-dashboard">
              
                <table class="table table-striped table-bordered dataex-html5-export">
                  <thead>
                    <tr>
						<th>Customer</th>
						<th>Description</th>
						<th>Date Received</th>
						<th>Amount</th>
						<th>Paid</th>
						<th>Balance</th>
						<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($orders->count()))
                        @foreach ($orders as $order)
                          <tr>
                            <td>{{$order->customer->fullname}}</td>
                            <td>{{$order->description}}</td>
							<td>{{$order->recieved_on}}</td>
							<td>{{$order->amount_charged}}</td>
							<td>{{$order->amount_paid}}</td>
							@php
								$balance = $order->amount_charged -$order->amount_paid;
							@endphp
							<td>{{$balance}}</td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-id="{{$order->id}}" class="dropdown-item">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$order->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
						<x-modals.delete :route="'order.destroy'" :title="'Customer Order'" />
                    @endif                    
                  </tbody>
                  
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ HTML5 export buttons table -->


<!-- add orders modal starts here -->
<div class="modal fade text-left" id="add-order" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Order</label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="{{route('orders')}}">
				@csrf
				<div class="modal-body">
					<label>Select Customer: </label>
					<div class="form-group">
						<select name="customer" title="select customer" class="select2 form-control">
							<optgroup>								 
								@if (!empty($customers->count()))
									@foreach ($customers as $customer)
									<option value="{{$customer->id}}">{{$customer->fullname}}</option>
									@endforeach
								@endif
							</optgroup>
						</select>
					</div>

					<label>Description: </label>
					<div class="form-group">
						<textarea class="form-control" placeholder="enter description here" name="description"></textarea>
					</div>

					<label>Date Received: </label>
					<div class="form-group">
						<input type="date" name="recieved_on" class="form-control">
					</div>

					<label>Received By: </label>
					<div class="form-group">
						<input type="text" placeholder="Enter receiver name" name="receiver" class="form-control">
					</div>

					<label>Amount: </label>
					<div class="form-group">
						<input type="text" placeholder="Enter amount charged" name="amount_charged" class="form-control">
					</div>

					<label>Paid: </label>
					<div class="form-group">
						<input type="text" name="amount_paid" class="form-control" placeholder="Enter amount paid">
					</div>

					
					<label>Date To Collect: </label>
					<div class="form-group">
						<input type="date" class="form-control" name="collecting_on">
					</div>
				</div>
				<div class="modal-footer">
					<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
					<button class="btn btn-outline-primary btn-lg" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- add order modal ends here -->                   
@endsection


@push('page-js')

@endpush