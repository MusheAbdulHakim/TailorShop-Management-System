@extends('layouts.app')

@push('page-css')
	
@endpush

@push('breadcrumb')
<h3 class="content-header-title">User Profile</h3>
<div class="row breadcrumbs-top">
  <div class="breadcrumb-wrapper col-12">
	<ol class="breadcrumb">
	  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
	  </li>
	  <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a>
	  </li>
	  <li class="breadcrumb-item active">User Profile
	  </li>
	</ol>
  </div>
</div>
@endpush

@section('content')
	<!-- account setting page start -->
	<section id="page-account-settings">
		<div class="row">
			<!-- left menu section -->
			<div class="col-md-3 mb-2 mb-md-0">
				<ul class="nav nav-pills flex-column mt-md-0 mt-1">
					<li class="nav-item">
						<a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
							href="#account-vertical-general" aria-expanded="true">
							<i class="ft-globe mr-50"></i>
							General
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
							aria-expanded="false">
							<i class="ft-lock mr-50"></i>
							Change Password
						</a>
					</li>
					
				</ul>
			</div>
			<!-- right content section -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-content">
						<div class="card-body">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="account-vertical-general"
									aria-labelledby="account-pill-general" aria-expanded="true">
									
									<div class="media">
										<a href="javascript: void(0);">
											<img src="@if(!empty(auth()->user()->avatar)){{asset('storage/avatars/'.auth()->user()->avatar)}}@else {{asset('app-assets/images/portrait/small/avatar-s-1.png')}} @endif" class="rounded mr-75" alt="profile image" height="64" width="64">
										</a>
										<div class="media-body mt-75">
											<div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
												<label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
													for="account-upload">Upload new photo</label>
											
											</div>
										</div>
									</div>
									<hr>
									<form method="post" enctype="multipart/form-data" action="{{route('user-profile')}}">
										@method("PUT")
										@csrf
										<div class="row">
											<input type="file" value="{{auth()->user()->avatar}}" name="avatar" id="account-upload" hidden>
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-username">Username</label>
														<input type="text" class="form-control" id="account-username"
															placeholder="Username" name="username" value="{{auth()->user()->username}}" >
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-name">FullName</label>
														<input name="name" type="text" class="form-control" id="account-name"
															placeholder="Fullname" value="{{auth()->user()->name}}" >
													</div>
												</div>
											</div>
											
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-e-mail">E-mail</label>
														<input name="email" type="email" class="form-control" id="account-e-mail"
															placeholder="Email" value="{{auth()->user()->email}}" >
													</div>
												</div>
											</div>
											
											
											
											<div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
												<button type="submit" name="update_info" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
													changes</button>
												<button type="reset" class="btn btn-light">Cancel</button>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
									aria-labelledby="account-pill-password" aria-expanded="false">
									<form method="post" action="{{route('user-profile')}}">
										@csrf
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-old-password">Old Password</label>
														<input name="old_password" type="password" class="form-control"
															id="account-old-password" placeholder="Old Password">
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-new-password">New Password</label>
														<input type="password" name="password" id="account-new-password"
															class="form-control" placeholder="New Password">
													</div>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<div class="controls">
														<label for="account-retype-new-password">Retype New
															Password</label>
														<input type="password" name="password_confirmation" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
												<button type="submit" name="update_password" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
													changes</button>
												<button type="reset" class="btn btn-light">Cancel</button>
											</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- account setting page end -->
@endsection


@push('page-js')
	
@endpush
