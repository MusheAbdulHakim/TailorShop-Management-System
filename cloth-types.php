<?php 
	include_once 'includes/loader.php';
	check_login();
	if (isset($_POST['add'])) {
		$title = htmlspecialchars($_POST['cloth_type_name']);
		$gender = htmlspecialchars($_POST['gender']);
		$add_category = DB::insert('cloth-types',[
			'title'=>$title,
			'gender'=>$gender,
		]);
		if ($add_category) {
			alert('New Cloth Type has been added');
			redirect_to('cloth-types');
		}
	}
	if (isset($_GET['delid'])) {
		$id = $_GET['delid'];
		$delete = delete('cloth-types',$id);
		if ($delete) {
			alert('Cloth Type Has Been Deleted');
			redirect_to('cloth-types');
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
	
	<title>Cloth Types</title>
	<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">
	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/tables/datatable/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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
	<!-- END: Page CSS-->
	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout bg-full-screen-image vertical-menu material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
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
						<h3 class="content-header-title">Cloth Types</h3>
						<div class="row breadcrumbs-top">
							<div class="breadcrumb-wrapper col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>dashboard">Home</a>
									</li>
									<li class="breadcrumb-item"><a href="#">Cloth Types</a>
									</li>
									<li class="breadcrumb-item active">All Cloth Types
									</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="content-header-right col-md-3 col-12">
						<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
							
							<button class="btn btn-primary roundbox-shadow-2 px-2 mb-1" type="button" aria-haspopup="true" data-toggle="modal" data-target="#add-cloth-type" aria-expanded="true">Add Cloth Type</button>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-body">
				<!-- HTML5 export buttons table -->
				<section id="html5">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Cloth Types List</h4>
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
										
											<div class="table-responsive">
												<table class="table table-striped table-bordered dataex-html5-export">
													<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Gender</th>
														<th>Action</th>
													</tr>
												</thead>
													<tbody>
														<?php 
															$cloth_types = DB::query("SELECT * from `cloth-types`");
															$roll = 0;
															foreach ($cloth_types as $cloth_type):
																$roll++;
															
														 ?>
														 <tr>
														 	<td><?php echo $roll; ?></td>
														 	<td><?php echo htmlspecialchars_decode($cloth_type['title']); ?></td>
														 	<td><?php echo htmlspecialchars_decode($cloth_type['gender']); ?></td>
														 	<td>
									                <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									                <div class="dropdown-menu">
									                	
									                  <a href="#" data-id="<?php echo $cloth_type['id'];?>" data-gender="<?php echo $cloth_type['gender'];?>" data-title="<?php echo $cloth_type['title'];?>" class="dropdown-item editbtn"><i class="la la-edit"></i>Edit</a>
									                  <div class="dropdown-divider"></div>
									                  
									                  <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo BASE_URL; ?>cloth-types?delid=<?php echo $cloth_type['id'];?>" class="dropdown-item deletebtn" ><i class="la la-trash"></i>Delete</a>
									                  
									                </div>
														 	</td>
														 </tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--/ HTML5 export buttons table -->                      
				<!-- include cloth type modals -->
				<?php include_once 'templates/modals/cloth_type_modal.php'; ?>
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
	<!-- BEGIN: Footer-->
	<?php include_once 'templates/_copyright.php'; ?>
	<!-- END: Footer-->
	<!-- END: Footer-->
	
	<!-- BEGIN: Vendor JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/material-vendors.min.js"></script>
	
	<!-- BEGIN Vendor JS-->
	<!-- BEGIN: Page Vendor JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/jszip.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/pdfmake.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/vfs_fonts.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/buttons.html5.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/buttons.print.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/tables/buttons.colVis.min.js"></script>
	<!-- END: Page Vendor JS-->
	<!-- BEGIN: Theme JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/customizer.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/footer.min.js"></script>
	<!-- END: Theme JS-->
	<!-- BEGIN: Page JS-->
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
	<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.min.js"></script>
	<!-- END: Page JS-->
</body>
<!-- END: Body-->
<script type="text/javascript">
	
	$(document).ready(function(){
			$('.editbtn').on('click',function(){
				var id = $(this).data('id');
				var title = $(this).data('title');
				var gender = $(this).data('gender');
				console.log(title);
			});
		});
</script>

</html>