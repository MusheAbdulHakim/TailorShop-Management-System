<?php 
	include_once 'includes/loader.php';
	check_login();
	$auth = new Auth();
	if (isset($_POST['add_user'])) {
		$username = htmlspecialchars($_POST['username']);
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$password = htmlspecialchars($_POST['password']);
		$confirm_password = htmlspecialchars($_POST['confirm_password']);
		$status =htmlspecialchars($_POST['status']);
		//grabing user profile picture
		$file = $_FILES['image']['name'];
		$file_loc = $_FILES['image']['tmp_name'];
		$folder="uploads/users/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);
		if(move_uploaded_file($file_loc,$folder.$final_file))
			{
				$avatar=$final_file;
			}
		else{
			$avatar = Null;
		}
		if (!$auth->exist($username,$email,$phone)) {
			if ($password != $confirm_password) {
					echo "<script>alert('passwords do not match!!!')</script>";
				}
			$password = password_hash($password, PASSWORD_DEFAULT);
			$add_user = DB::insert('users',[
				'username'=>$username,
				'firstname'=>$firstname,
				'lastname'=>$lastname,
				'email'=>$email,
				'phone'=>$phone,
				'avatar'=>$avatar,
				'password'=>$password,
				'status'=>$status,
			]);
			if ($add_user) {
				echo "<script>alert('New User has been added');</script>";
				echo "<script>document.location.href='users'</script>";
			}
		}
	}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
	<!-- BEGIN: Head-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
		<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
		<meta name="author" content="PIXINVENT">
		<title>Users </title>
		<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">

		<!-- BEGIN: Vendor CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/tables/datatable/datatables.min.css">
		<!-- END: Vendor CSS-->

		<!-- BEGIN: Theme CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/material.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/components.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/bootstrap-extended.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/material-extended.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/material-colors.min.css">
		<!-- END: Theme CSS-->

		<!-- BEGIN: Page CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/core/menu/menu-types/material-vertical-menu.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/pages/page-users.min.css">
		<!-- END: Page CSS-->

		<!-- BEGIN: Custom CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<!-- END: Custom CSS-->

	</head>
	<!-- END: Head-->

	<!-- BEGIN: Body-->
	<body class="vertical-layout vertical-menu material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

		<!-- BEGIN: Header-->
		<?php include_once 'templates/_header.php'; ?>
		<!-- END: Header-->
		<!-- BEGIN: Main Menu-->
		<?php include_once 'templates/_sidebar.php'; ?>
		<!-- END: Main Menu-->
		<!-- BEGIN: Content-->
		<div class="app-content content">
			<div class="content-header row">
				<div class="content-header-light col-12">
				<div class="row">
					<div class="content-header-left col-md-9 col-12 mb-2">
						<h3 class="content-header-title">Users</h3>
						<div class="row breadcrumbs-top">
							<div class="breadcrumb-wrapper col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>dashboard">Home</a>
									</li>
									<li class="breadcrumb-item"><a href="#">User</a>
									</li>
									<li class="breadcrumb-item active">All Users
									</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="content-header-right col-md-3 col-12">
						<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
							<button class="btn btn-primary roundbox-shadow-2 px-2 mb-1" type="button" aria-haspopup="true" data-toggle="modal" data-target="#add-user" aria-expanded="true">Add User</button>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-body"><!-- users list start -->
					<section class="users-list-wrapper">
							<div class="users-list-filter px-1">
									<form>
											<div class="row border border-light rounded py-2 mb-2">
													<div class="col-12 col-sm-6 col-lg-3">
															<label for="users-list-verified">Verified</label>
															<fieldset class="form-group">
																	<select class="form-control" id="users-list-verified">
																			<option value="">Any</option>
																			<option value="Yes">Yes</option>
																			<option value="No">No</option>
																	</select>
															</fieldset>
													</div>
													<div class="col-12 col-sm-6 col-lg-3">
															<label for="users-list-role">Role</label>
															<fieldset class="form-group">
																	<select class="form-control" id="users-list-role">
																			<option value="">Any</option>
																			<option value="User">User</option>
																			<option value="Staff">Staff</option>
																	</select>
															</fieldset>
													</div>
													<div class="col-12 col-sm-6 col-lg-3">
															<label for="users-list-status">Status</label>
															<fieldset class="form-group">
																	<select class="form-control" id="users-list-status">
																			<option value="">Any</option>
																			<option value="Active">Active</option>
																			<option value="Close">Close</option>
																			<option value="Banned">Banned</option>
																	</select>
															</fieldset>
													</div>
													<div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
															<button class="btn btn-block btn-primary glow">Show</button>
													</div>
											</div>
									</form>
							</div>
							<div class="users-list-table">
									<div class="card">
											<div class="card-content">
													<div class="card-body">
															<!-- datatable start -->
															<div class="table-responsive">
																	<table id="users-list-datatable" class="table">
																			<thead>
																					<tr>
																							<th>#</th>
																							<th>Username</th>
																							<th>FullName</th>
																							<th>Email</th>
																							<th>Phone</th>

																							<th>Status</th>
																							<th>Action</th>
																					</tr>
																			</thead>
																			<tbody>
																				<?php 
																					$users = DB::query("SELECT * FROM users");
																					$roll = 0;
																					foreach($users as $user):
																						$roll++;
																				 ?>
																					<tr>
																							<td><?php echo $roll; ?></td>
																							<td><a href=""><?php echo htmlspecialchars_decode($user['username']); ?></a>
																							</td>
																							<td><?php echo htmlspecialchars_decode($user['firstname']).' '.htmlspecialchars_decode($user['lastname']); ?></td>
																							<td><?php echo htmlspecialchars_decode($user['email']); ?></td>
																							<td><?php echo htmlspecialchars_decode($user['phone']); ?></td>
																							
																							<td><span class="badge badge-success"><?php echo htmlspecialchars_decode($user['status']); ?></span></td>
																							<td>
														                <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
														                <div class="dropdown-menu">
														                  <a href="#" data-id="<?php echo $user['id'];?>" class="dropdown-item"><i class="la la-edit"></i>Edit</a>
														                  <div class="dropdown-divider"></div>
														                  
														                  <a href="#" aria-haspopup="true" data-toggle="modal" data-target="#deleteConfirmModal" aria-expanded="true" class="dropdown-item deletebtn" data-username="<?php echo $user['username'];?>" data-id="<?php echo $user['id'];?>"><i class="la la-trash"></i>Delete</a>
														                  
														                </div>
																			 	</td>
																					</tr>
																				<?php endforeach; ?>
																			</tbody>
																	</table>
															</div>
															<!-- datatable ends -->
													</div>
											</div>
									</div>
							</div>
					</section>
			<!-- users list ends -->
			
				</div>
			</div>
		</div>
		<!-- END: Content-->


		<!-- BEGIN: Customizer-->
		<?php include_once 'templates/_customizer.php'; ?>
		<!-- End: Customizer-->

		<!-- include users modals -->
			<?php include_once 'templates/modals/users_modals.php'; ?>

		<!-- BEGIN: Footer-->
		<?php include_once 'templates/_copyright.php'; ?>
		<!-- END: Footer-->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.deletebtn').on('click',function(){
					$('#deleteConfirmModal').modal('show');
					var id = $(this).data('id');
					var username = $(this).data('username');
					$('#delete_id').val(id);
					$('#username').html(username);
				});
			});
		</script>

		<!-- BEGIN: Vendor JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/material-vendors.min.js"></script>
		<!-- BEGIN Vendor JS-->

		<!-- BEGIN: Page Vendor JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
		<!-- END: Page Vendor JS-->

		<!-- BEGIN: Theme JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/customizer.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/footer.min.js"></script>
		<!-- END: Theme JS-->

		<!-- BEGIN: Page JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/page-users.min.js"></script>
		<!-- END: Page JS-->

	</body>
	<!-- END: Body-->
</html>