@extends('layouts.app')

@push('page-css')

@endpush

@push('breadcrumb')
<h3 class="content-header-title">Measurement Parts</h3>
<div class="row breadcrumbs-top">
	<div class="breadcrumb-wrapper col-12">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
			</li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Measurements</a>
			</li>
			<li class="breadcrumb-item active">All Measurement Parts
			</li>
		</ol>
	</div>
</div>
@endpush

@push('breadcrumb-button')
<x-buttons.primary :text="'Set Measurement Part'" :target="'#add-measurement-part'" />
@endpush

@section('content')
<!-- HTML5 export buttons table -->
<section id="html5">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Measurement Parts List</h4>
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
                        <th>Measurement Type</th>
						<th>Measurement Part</th>
						<th>Description</th>
						<th>Image</th>
						<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (!empty($parts->count()))
                        @foreach ($parts as $part)
                          <tr>
                            <td>{{$part->clothType->name}}</td>
							<td>{{$part->name}}</td>
							<td>{{$part->description}}</td>
							<td>@if (!empty($part->image))
								<a href="{{asset('storage/parts/'.$part->image)}}" target="_blank" rel="noopener noreferrer">
									<img width="50" src="{{asset('storage/parts/'.$part->image)}}" alt="image">
								</a>
							@endif </td>
                            <td>
                              <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                              <div class="dropdown-menu">
                                  <a href="javascript:void(0)" data-image="{{$part->image}}" data-type="{{$part->clothType->name}}" data-description="{{$part->description}}" data-id="{{$part->id}}" data-name="{{$part->name}}" class="dropdown-item editbtn">
                                  <i class="la la-edit"></i>Edit
                                </a>
                                  <div class="dropdown-divider"></div>
                                  <a data-id="{{$part->id}}" href="javascript:void(0)" aria-haspopup="true" data-toggle="modal"  aria-expanded="true" class="dropdown-item deletebtn">
                                  <i class="la la-trash"></i>Delete
                                </a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        <x-modals.delete :route="'measurement-parts'" :title="'Measurement Part'" />
                        
						<!-- add set measurement modal starts here -->
							<div class="modal zoomIn text-left" id="edit-measurement-part" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<label class="modal-title text-text-bold-600" id="myModalLabel33">Set Measurement Parts</label>
											<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<form method="post" enctype="multipart/form-data" action="{{route('measurement-parts')}}">
											@csrf
											@method("PUT")
											<div class="modal-body">
												<div class="form-body">
													<input type="hidden" id="edit_id" name="id">
													<div class="form-group">
														<label>Cloth Type: </label>
														<select name="cloth_type" class="form-control edit_type">
															@if (!empty($categories->count()))
															@foreach ($categories as $category)
																<option value="{{$category->id}}">{{$category->name}}</option>
															@endforeach
														@endif
														</select>
													</div>
													<div class="form-group">
														<label>Measurement Name</label>
														<div class="position-relative">
															<input type="text" class="form-control edit_name" placeholder="measurement name" name="name">
														</div>
													</div>
												<div class="form-group">
													<label>Description</label>
													<textarea rows="3" class="form-control edit_description" name="description" placeholder="Enter description"></textarea>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Image</label>
													<div class="custom-file">
														<input name="image" type="file" class="form-control edit_image">
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
							<!-- edit measurement part modal ends here -->
						
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

<!-- add set measurement modal starts here -->
<div class="modal zoomIn text-left" id="add-measurement-part" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<label class="modal-title text-text-bold-600" id="myModalLabel33">Set Measurement Parts</label>
				<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" enctype="multipart/form-data" action="{{route('measurement-parts')}}">
				@csrf
				<div class="modal-body">
					<div class="form-body">
						<div class="form-group">
							<label>Cloth Type: </label>
							<select name="cloth_type" class="form-control">
								@if (!empty($categories->count()))
								@foreach ($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							@endif
							</select>
						</div>
						<div class="form-group">
							<label>Measurement Name</label>
							<div class="position-relative">
								<input type="text" class="form-control" placeholder="measurement name" name="name">
							</div>
						</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="description" rows="3" class="form-control" name="description" placeholder="Enter description"></textarea>
					</div>
					<div class="form-group">
						<label for="image" class="col-sm-3 control-label">Image</label>
						<fieldset class="form-group">
						<div class="custom-file">
							<input name="image" type="file" class="form-control">
						</div>
						</fieldset>
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
<!-- add cloth types modal ends here -->
@endsection


@push('page-js')
<script>
  $(document).ready(function (){
    $('.editbtn').on('click',function (){
      $('#edit-measurement-part').modal('show');
      var id = $(this).data('id');
      var name = $(this).data('name');
	  var type = $(this).data('type');
	  var description = $(this).data('description');
	  var image = $(this).data('image')
      $('#edit_id').val(id);
      $('.edit_name').val(name);
	  $('.edit_type').val(type);
	  $('.edit_description').val(description);
	  $('.edit_image').val(image);
    })
  })
</script>
@endpush