@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Staff</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a>
			</li>
			<li class="breadcrumb-item active">All Staff
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Add Staff'" :target="'#add-staff'" />
@endpush

@section('content')
	
<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Designations List</h4>
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
                        <th>Designation</th>
						<th>FullName</th>
						<th>Address</th>
						<th>Phone Number</th>
						<th>Gender</th>
						<th>Salary</th>
						<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($staff->count()))
                        @foreach ($staff as $staff)
                          <tr>
							<td>{{$staff->designation->title}}</td>
                            <td>{{$staff->fullname}}</td>
							<td>{{$staff->address}}</td>
							<td>{{$staff->phone}}</td>
							<td>{{$staff->gender}}</td>
							<td>{{$staff->salary}}</td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-id="{{$staff->id}}" data-fullname="{{$staff->fullname}}" class="dropdown-item editbtn">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$staff->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        <x-modals.delete :route="'staff.destroy'" :title="'Staff'" />
                       
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

  <div class="modal wobble text-left" id="add-staff" tabindex="-1" role="dialog" aria-labelledby="AddCustomer" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <label class="modal-title text-text-bold-600" id="myModalLabel33">Add Staff Designation</label>
		  <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form method="post" enctype="multipart/form-data" action="{{route('staff')}}">
			@csrf
			<div class="modal-body">
				<div class="form-group">
					<label>Designation</label>
					<select name="designation" class="select2 form-control">
						@if (!empty($designations->count()))
								@foreach ($designations as $designation)
									<option value="{{$designation->id}}">{{$designation->title}}</option>										
								@endforeach
							@endif
					</select>
				</div>
				
				<div class="form-group">
					<label>Full Name: </label>
					<div class="position-relative has-icon-left">
						<input type="text" id="fullname" class="form-control" placeholder="mushe abdul-hakim" name="fullname">
						<div class="form-control-position">
							<i class="ft-user"></i>
						</div>
					</div>

				<div class="form-group">
					<label>Picture : </label>
					<div class="position-relative has-icon-left">
					<input type="file" id="avatar" class="form-control" name="avatar">
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<div class="position-relative has-icon-left">
						<input type="text" id="address" class="form-control" placeholder="customer address" name="address">
						<div class="form-control-position">
							<i class="la la-map-marker"></i>
						</div>
					</div>
				</div>

				<div class="form-group">
					<select name="gender" class="select2 form-control">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
					</select>
				</div>

				<div class="form-group">
					<label for="phone">Phone Number</label>
					<div class="position-relative has-icon-left">
						<input type="text" id="phone" class="form-control" name="phone">
						<div class="form-control-position">
							<i class="ft-phone"></i>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Salary</label>
						<div class="input-group mt-0">
							<div class="input-group-prepend">
								<span class="input-group-text">$</span>
							</div>
						<input type="number" class="form-control" placeholder="Salary" name="salary">
					<div class="input-group-append">
						<span class="input-group-text">.00</span>
					</div>
				</div>
			</div>		

			</div>

			<div class="modal-footer">
				<button type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal">Close</button>						
				<button type="submit" name="add_staff" class="btn btn-outline-primary btn-lg">Submit</button>
			</div>
		</form>
	  </div>
	</div>
  </div>
@endsection

@push('page-js')
	
@endpush