@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Cloth Types</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Cloth Types</a>
			</li>
			<li class="breadcrumb-item active">All Cloth Types
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Cloth Type'" :target="'#add-cloth-type'" />
@endpush

@section('content')

<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Cloth Type List</h4>
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
						<th>Gender</th>
						<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($cloth_types->count()))
                        @foreach ($cloth_types as $type)
                          <tr>
                            <td>{{$type->name}}</td>
							<td>{{$type->gender}}</td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-id="{{$type->id}}" data-gender="{{$type->gender}}" data-name="{{$type->name}}" class="dropdown-item editbtn">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$type->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        <x-modals.delete :route="'cloth-type.destroy'" :title="'Cloth Type'" />
                        
						<!-- edit cloth types modal -->
						<div class="modal zoomIn text-left" id="edit-cloth-type" tabindex="-1" role="dialog" aria-labelledby="add-cloth-type" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<label class="modal-title text-text-bold-600" >Edit Cloth Types</label>
										<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form method="post" action="{{route('cloth-types')}}">
										@csrf
										@method("PUT")
										<div class="modal-body">
											<div class="form-body">
												<input type="hidden" id="edit_id" name="id">
												<div class="form-group">
													<label>Cloth Type Name: </label>
													<input type="text" class="form-control edit_name" placeholder="Cloth Type Name" name="name">
												</div>
												<div class="form-group">
													<label>Gender: </label>
													<select name="gender" class="form-control edit_gender">
														<option selected disabled value="Null">Select Gender</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
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


<!-- add cloth types modal starts here -->
<div class="modal zoomIn text-left" id="add-cloth-type" tabindex="-1" role="dialog" aria-labelledby="add-cloth-type" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Add Cloth Types</label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="{{route('cloth-types')}}">
				@csrf
				<div class="modal-body">
					<div class="form-body">
						<div class="form-group">
							<label>Cloth Type Name: </label>
							<input type="text" class="form-control" placeholder="Cloth Type Name" name="name">
						</div>
						<div class="form-group">
							<label>Gender: </label>
							<select name="gender" class="form-control">
								<option selected disabled value="Null">Select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
					<button type="submit" name="add" class="btn btn-outline-primary btn-lg">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- add cloth types modal ends here-->
@endsection


@push('page-js')
<script>
	$(document).ready(function (){
	  $('.editbtn').on('click',function (){
		$('#edit-cloth-type').modal('show');
		var id = $(this).data('id');
		var name = $(this).data('name');
		var gender = $(this).data('gender');
		$('#edit_id').val(id);
		$('.edit_name').val(name);
		$('.edit_gender').val(gender);
	  })
	})
  </script>
@endpush