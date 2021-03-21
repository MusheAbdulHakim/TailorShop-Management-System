<?php 
	include_once 'includes/loader.php';
	check_login();
	if (isset($_POST['add_order'])) {
		$customer = htmlspecialchars($_POST['customer']);
		$description = htmlspecialchars($_POST['description']);
		$date_received = htmlspecialchars($_POST['date_received']);
		$received_by = htmlspecialchars($_POST['receiver']);
		$amount = htmlspecialchars($_POST['amount']);
		$paid = htmlspecialchars($_POST['paid']);
		$status = htmlspecialchars($_POST['status']);
		$collect_date = htmlspecialchars($_POST['date_to_collect']);
		$add_order = DB::insert('orders',[
			'customer'=>$customer,
			'description'=>$description,
			'amount'=>$amount,
			'paid'=>$paid,
			'received_by'=>$received_by,
			'date_received'=>$date_received,
			'completed'=>$status,
			'date_collected'=>$collect_date
		]);
		if ($add_order) {
			echo "<script>alert('new order has been added');</script>";
			echo "<script>document.location.href='orders'</script>";
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
	<title>Orders </title>
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
						<h3 class="content-header-title">Orders</h3>
						<div class="row breadcrumbs-top">
							<div class="breadcrumb-wrapper col-12">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>dashboard">Home</a>
									</li>
									<li class="breadcrumb-item"><a href="#">Orders</a>
									</li>
									<li class="breadcrumb-item active">All Orders
									</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="content-header-right col-md-3 col-12">
						<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
							
							<button class="btn btn-primary roundbox-shadow-2 px-2 mb-1" type="button" aria-haspopup="true" data-toggle="modal" data-target="#add-order" aria-expanded="true">Add Order</button>
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
									<h4 class="card-title">Orders List</h4>
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
														<tr>
														<th>#</th>
														<th>Customer</th>
														<th>Description</th>
														<th>Date Received</th>
														<th>Amount</th>
														<th>Paid</th>
														<th>Balance</th>
														<th>Action</th>
													</tr>
													</tr>
												</thead>
													<tbody>
														<?php 
															$orders = DB::query("SELECT * FROM `orders` ORDER BY id desc");
															$roll = 0;
															foreach($orders as $order):
																$roll++;
																$balance = $order['amount']-$order['paid'];
														 ?>
														 <tr>
														 	<td><?php echo $roll; ?></td>
														 	<td><?php echo htmlspecialchars_decode($order['customer']); ?></td>
														 	<td><?php echo htmlspecialchars_decode($order['description']); ?></td>
														 	<td><?php echo htmlspecialchars_decode($order['date_received']); ?></td>
														 	<td><?php echo currency .htmlspecialchars_decode($order['amount']); ?></td>
														 		<td><?php echo currency .htmlspecialchars_decode($order['paid']); ?></td>
														 	<td><?php echo currency .$balance; ?></td>
														 	<td>
									                <a href="#" class="float-md-right" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									                <div class="dropdown-menu">
									                	<a class="dropdown-item" href="">Add Payment</a>
									                	<div class="dropdown-divider"></div>
									                
																		<a class="dropdown-item" href="addmeasurement.php">Receipt</a>

																		
									                  <div class="dropdown-divider"></div>
									                  									                 
									                  <a href="#" class="btn btn-info btn-sm btn-edit"><i class="la la-edit"></i>Edit</a>
									                  <div class="dropdown-divider"></div>
									                  
									                  <a href="#" class="btn btn-danger btn-sm btn-delete " data-id="<?php echo $order['id'];?>"><i class="la la-trash"></i>Delete</a>
									                  
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
				<!-- include order modals -->
				<?php include_once 'templates/modals/orders_modals.php'; ?>
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

</html>