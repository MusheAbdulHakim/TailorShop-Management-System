@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Income Categories</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Income Category</a>
			</li>
			<li class="breadcrumb-item active">All Income Categories
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Category'" :target="'#add-category'" />
@endpush

@section('content')

<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Income Categories List</h4>
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
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($categories->count()))
                        @foreach ($categories as $category)
                          <tr>
                            <td>{{$category->name}}</td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-id="{{$category->id}}" data-name="{{$category->name}}" class="dropdown-item editbtn">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$category->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        <x-modals.delete :route="'income-category.destroy'" :title="'Income Category'" />
                        <!-- edit expense category modal starts here -->
                        <div class="modal wobble text-left" id="edit-category" tabindex="-1" role="dialog"  aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit Income Category</label>
                                <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form method="post" action="{{route('income-categories')}}">
                                @csrf
                                @method("PUT")
                                <div class="modal-body">
                                  <input type="hidden" id="edit_id" name="id">
                                  <label>Category Name: </label>
                                  <div class="form-group">
                                    <input type="text" placeholder="Enter Category Name" name="name" class="form-control edit_name">
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


<!-- add income category modal starts here -->
<div class="modal zoomIn text-left" id="add-category" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Income Category</label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="{{route('income-categories')}}">
				@csrf
				<div class="modal-body">
					<label>Category Name: </label>
					<div class="form-group">
						<input type="text" placeholder="Enter Category Name" name="name" class="form-control">
					</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
					<button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- add income category modal ends here -->
@endsection


@push('page-js')
<script>
  $(document).ready(function (){
    $('.editbtn').on('click',function (){
      $('#edit-category').modal('show');
      var id = $(this).data('id');
      var name = $(this).data('name');
      $('#edit_id').val(id);
      $('.edit_name').val(name);
    })
  })
</script>
@endpush