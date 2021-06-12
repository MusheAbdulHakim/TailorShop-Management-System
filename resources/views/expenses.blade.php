@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Expenses</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Expense</a>
			</li>
			<li class="breadcrumb-item active">All Expenses
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Expense'" :target="'#add-expense'" />
@endpush


@section('content')
<!-- HTML5 export buttons table -->
<section id="html5">
	<div class="row">
		<div class="col-12">
		<div class="card">
			<div class="card-header">
			<h4 class="card-title">Expenses List</h4>
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
					@if (!empty($expenses->count()))
						@foreach ($expenses as $expense)
							<tr>
							<td>{{$expense->expenseCategory->name}}</td>
							<td>{{$expense->purchase_date}}</td>
							<td>{{$expense->price}}</td>
							<td>{{$expense->description}}</td>
							<td>
								<a href="javascript:void(0)" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu">
									<a href="javascript:void(0)" data-date="{{$expense->purchase_date}}" data-description="{{$expense->description}}" data-price="{{$expense->price}}" data-category="{{$expense->expenseCategory->id}}" data-id="{{$expense->id}}" class="dropdown-item editbtn">
									<i class="la la-edit"></i>Edit
								</a>
									<div class="dropdown-divider"></div>
									<a data-id="{{$expense->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
									<i class="la la-trash"></i>Delete
								</a>
								</div>
							</td>
							</tr>
						@endforeach
						<x-modals.delete :route="'expense.destroy'" :title="'Expense'" />
						<!-- edit expense modal starts here -->
						<div class="modal wobble text-left" id="edit-expense" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<label class="modal-title text-text-bold-600" id="myModalLabel33">Edit Expense</label>
								<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<form method="post" action="{{route('expenses')}}">
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
											<label for="description">Description</label>
											<textarea rows="3" class="form-control edit_description" name="description" placeholder="expense description"></textarea>
										</div>
					
										<div class="form-group">
										<label for="purchase_date">Date </label>
										<input type="date" class="form-control edit_date" name="purchase_date">
										</div>
					
										<div class="form-group">
											<label>Amount</label>
											<div class="input-group mt-0">
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<input type="number" class="form-control edit_price" placeholder="enter expense price" name="price">
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
						<!-- edit expense category modal ends here -->
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

<!-- add expense modal starts here -->
<div class="modal wobble text-left" id="add-expense" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Expense </label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="{{route('expenses')}}">
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
					<label for="purchase_date">Date </label>
					<input type="date" id="purchase_date" class="form-control" name="purchase_date">
					</div>

					<div class="form-group">
						<label>Amount</label>
						<div class="input-group mt-0">
							<div class="input-group-prepend">
								<span class="input-group-text">$</span>
							</div>
							<input type="number" id="price" class="form-control" placeholder="enter expense price" name="price">
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
<!-- add expense modal ends here -->
@endsection


@push('page-js')
<script>
  $(document).ready(function (){
    $('.editbtn').on('click',function (){
      $('#edit-expense').modal('show');
      var id = $(this).data('id');
      var category = $(this).data('category');
	  var date = $(this).data('date');
	  var description = $(this).data('description');
	  var price = $(this).data('price');
      $('#edit_id').val(id);
      $('.edit_category').val(category);
	  $('.edit_date').val(date);
	  $('.edit_description').val(description);
	  $('.edit_price').val(price);
    })
  })
</script>
@endpush