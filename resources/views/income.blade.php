@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Income</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Income</a>
			</li>
			<li class="breadcrumb-item active">All Income
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Income'" :target="'#add-income'" />
@endpush

@section('content')
	<!-- HTML5 export buttons table -->
<section id="html5">
	<div class="row">
		<div class="col-12">
		<div class="card">
			<div class="card-header">
			<h4 class="card-title">Income List</h4>
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
						<th>Category</th>
						<th>Description</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					@if (!empty($incomes->count()))
						@foreach ($incomes as $income)
							<tr>
							<td>{{$income->incomeCategory->name}}</td>
							<td>{{$income->description}}</td>
							<td>{{date_format(date_create($income->income_date),"d M,Y")}}</td>
							<td>{{$income->amount}}</td>
							<td>
								<a href="javascript:void(0)" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu">
									<a href="javascript:void(0)" data-date="{{$income->income_date}}" data-description="{{$income->description}}" data-amount="{{$income->amount}}" data-category="{{$income->incomeCategory->id}}" data-id="{{$income->id}}" class="dropdown-item editbtn">
									<i class="la la-edit"></i>Edit
								</a>
									<div class="dropdown-divider"></div>
									<a data-id="{{$income->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
									<i class="la la-trash"></i>Delete
								</a>
								</div>
							</td>
							</tr>
						@endforeach
						{{-- delete income modal  --}}
						<x-modals.delete :route="'income.destroy'" :title="'Income'" />
						<!-- edit income modal starts here -->
						<div class="modal wobble text-left" id="edit-income" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<label class="modal-title text-text-bold-600" id="myModalLabel33">Edit Income</label>
								<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<form method="post" action="{{route('income')}}">
									@csrf
									@method("PUT")
									<div class="modal-body">
										<input type="hidden" id="edit_id" name="id">
										<div class="form-group">
											<select name="category" class="select2 form-control edit_category">
												@if (!empty($categories->count()))
													@foreach ($categories as $category)
														<option value="{{$category->id}}">{{$category->name}}</option>
													@endforeach
												@endif	
											</select>
										</div>
										
										<div class="form-group">
											<label>Description</label>
											<textarea rows="3" class="form-control edit_description" name="description" placeholder="expense description"></textarea>
										</div>
					
										<div class="form-group">
										<label>Date </label>
										<input type="date" class="form-control edit_date" name="income_date">
										</div>
					
									<div class="form-group">
											<label>Amount</label>
											<div class="input-group mt-0">
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<input type="number" class="form-control edit_amount" placeholder="enter the amount" name="amount">
												<div class="input-group-append">
													<span class="input-group-text">.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
										<button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
									</div>
								</form>
							</div>
							</div>
						</div>
						<!-- edit income category modal ends here -->
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

<!-- add income modal starts here -->
<div class="modal wobble text-left" id="add-income" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Income </label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="{{route('income')}}">
				@csrf
				<div class="modal-body">

					<div class="form-group">
						<select name="category" class="select2 form-control">
							@if (!empty($categories->count()))
								@foreach ($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							@endif	
						</select>
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="description" rows="3" class="form-control" name="description" placeholder="expense description"></textarea>
					</div>

					<div class="form-group">
					<label for="date">Date </label>
					<input type="date" id="date" class="form-control" name="income_date">
					</div>

				<div class="form-group">
						<label>Amount</label>
						<div class="input-group mt-0">
							<div class="input-group-prepend">
								<span class="input-group-text">$</span>
							</div>
							<input type="number" id="amount" class="form-control" placeholder="enter the amount" name="amount">
							<div class="input-group-append">
								<span class="input-group-text">.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
					<button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- add income modal ends here -->
@endsection

@push('page-js')
<script>
  $(document).ready(function (){
    $('.editbtn').on('click',function (){
      $('#edit-income').modal('show');
      var id = $(this).data('id');
      var category = $(this).data('category');
	  var date = $(this).data('date');
	  var description = $(this).data('description');
	  var amount = $(this).data('amount');
      $('#edit_id').val(id);
      $('.edit_category').val(category);
	  $('.edit_date').val(date);
	  $('.edit_description').val(description);
	  $('.edit_amount').val(amount);
    })
  })
</script>
@endpush