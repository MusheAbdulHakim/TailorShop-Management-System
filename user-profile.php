<?php 
	include_once 'includes/loader.php';
	check_login();
	if (isset($_POST['update_info'])) {
		
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
	<title>Edit Profile</title>
	<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/forms/selects/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/pickers/pickadate/pickadate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/forms/toggle/switchery.min.css">
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
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/plugins/forms/validation/form-validation.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/plugins/pickers/daterange/daterange.min.css">
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

	<!-- END: Main Menu-->
	<!-- BEGIN: Content-->
	<div class="app-content content">
	  <div class="content-header row">
		<div class="content-header-light col-12">
		  <div class="row">
			<div class="content-header-left col-md-9 col-12 mb-2">
			  <h3 class="content-header-title">User Profile</h3>
			  <div class="row breadcrumbs-top">
				<div class="breadcrumb-wrapper col-12">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>dashboard">Home</a>
					</li>
					<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>users">Users</a>
					</li>
					<li class="breadcrumb-item active">User Profile
					</li>
				  </ol>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>
	  </div>
	  <div class="content-overlay"></div>
	  <div class="content-wrapper">
		<div class="content-body">
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
												<img src="<?php echo BASE_URL; ?>uploads/users/<?php echo get_avatar(); ?>"
													class="rounded mr-75" alt="profile image" height="64" width="64">
											</a>
											<div class="media-body mt-75">
												<div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
													<label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
														for="account-upload">Upload new photo</label>
													<input type="file" id="account-upload" hidden>
												
												</div>
											</div>
										</div>
										<hr>
										<?php 
											$users = DB::query("SELECT * FROM users where username=%s",$_SESSION['user']);
											foreach($users as $user):

										 ?>
										<form method="post" validate>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-username">Username</label>
															<input type="text" class="form-control" id="account-username"
																placeholder="Username" value="<?php echo $user['username'] ?>" required
																data-validation-required-message="This username field is required">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-name">FirstName</label>
															<input name="firstname" type="text" class="form-control" id="account-name"
																placeholder="Firstname" value="<?php echo $user['firstname']; ?>" required
																data-validation-required-message="This field is required">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-name">LastName</label>
															<input name="lastname" type="text" class="form-control" id="account-name"
																placeholder="Lastname" value="<?php echo $user['lastname']; ?>" required
																data-validation-required-message="This field is required">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-e-mail">E-mail</label>
															<input name="email" type="email" class="form-control" id="account-e-mail"
																placeholder="Email" value="<?php echo $user['email']; ?>" required
																data-validation-required-message="This email field is required">
														</div>
													</div>
												</div>
												<!-- <div class="col-12">
													<div class="alert alert-warning alert-dismissible mb-2" role="alert">
														<button type="button" class="close" data-dismiss="alert"
															aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<p class="mb-0">
															Your email is not confirmed. Please check your inbox.
														</p>
														<a href="javascript: void(0);">Resend confirmation</a>
													</div>
												</div> -->
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-phone">Telephone</label>
															<input name="phone" type="tel" class="form-control" id="account-phone"
																placeholder="Telephone" value="<?php echo $user['phone']; ?>" required
																data-validation-required-message="This field is required">
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
									<?php endforeach; ?>
									</div>
									<div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
										aria-labelledby="account-pill-password" aria-expanded="false">
										<form method="post" validate>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-old-password">Old Password</label>
															<input name="password" type="password" class="form-control"
																id="account-old-password" required placeholder="Old Password"
																data-validation-required-message="This old password field is required">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-new-password">New Password</label>
															<input type="password" name="password" id="account-new-password"
																class="form-control" placeholder="New Password" required
																data-validation-required-message="The password field is required"
																minlength="6">
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<div class="controls">
															<label for="account-retype-new-password">Retype New
																Password</label>
															<input type="password" name="con-password" class="form-control"
																required id="account-retype-new-password"
																data-validation-match-match="password"
																placeholder="New Password"
																data-validation-required-message="The Confirm password field is required"
																minlength="6">
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
		</div>
	  </div>
	</div>
	<!-- END: Content-->


	<!-- BEGIN: Customizer-->
	<?php include_once 'templates/_customizer.php'; ?>
	<!-- End: Customizer-->

	
	<div class="sidenav-overlay"></div>
	<div class="drag-target"></div>

	<!-- BEGIN: Footer-->
	<?php include_once 'templates/_copyright.php'; ?>
	<!-- END: Footer-->


	<!-- BEGIN: Vendor JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/material-vendors.min.js"></script>
	<!-- BEGIN Vendor JS-->

	<!-- BEGIN: Page Vendor JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/pickers/pickadate/picker.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
	<!-- END: Page Vendor JS-->

	<!-- BEGIN: Theme JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/customizer.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/footer.min.js"></script>
	<!-- END: Theme JS-->

	<!-- BEGIN: Page JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/account-setting.min.js"></script>
	<!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>