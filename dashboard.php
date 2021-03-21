<?php 
	include_once 'includes/loader.php';
	check_login();
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
<title>Dashboard</title>
<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/weather-icons/climacons.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/meteocons/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/charts/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/charts/chartist.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
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
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/core/colors/palette-gradient.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/pages/timeline.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/pages/dashboard-ecommerce.min.css">
<!-- END: Page CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
<!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu material-vertical-layout material-layout 2-columns bg-full-screen-image fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- BEGIN: Header-->
<?php include_once 'templates/_header.php'; ?>
<!-- END: Header-->
<!-- BEGIN: Main Menu-->
<?php include_once 'templates/_sidebar.php'; ?>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
<div class="content-header row">
</div>
<div class="content-overlay"></div>
<div class="content-wrapper">
<div class="content-body">
<!-- eCommerce statistic -->
<div class="row">
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="success"><?php echo total_count('orders'); ?></h3>
												<h6>Customers</h6>
										</div>
										<div>
												<i class="icon-users success font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="info"><?php echo total_count('orders'); ?></h3>
												<h6>Total Orders</h6>
										</div>
										<div>
												<i class="icon-basket-loaded info font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="warning"><?php echo currency; ?>748</h3>
												<h6>Last 30 Days Income!</h6>
										</div>
										<div>
												<i class="la la-money warning font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>

	<div class="col-xl-3 col-lg-6 col-12">
		<div class="card pull-up">
				<div class="card-content">
						<div class="card-body">
								<div class="media d-flex">
										<div class="media-body text-left">
												<h3 class="danger">99.89 %</h3>
												<h6>Last 30 Days Expenses!</h6>
										</div>
										<div>
												<i class="icon-bar-chart danger font-large-2 float-right"></i>
										</div>
								</div>
								<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
										<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
						</div>
				</div>
		</div>
	</div>
</div>
<!--/ eCommerce statistic -->
<!-- Products sell and New Orders -->
<div class="row match-height">
<div class="col-xl-12 col-12" id="ecommerceChartView">
<div class="card card-shadow">
		<div class="card-header card-header-transparent py-20">
				<div class="btn-group dropdown">
						<a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
						<div class="dropdown-menu animate" role="menu">
								<a class="dropdown-item" href="#" role="menuitem">Sales</a>
								<a class="dropdown-item" href="#" role="menuitem">Total sales</a>
								<a class="dropdown-item" href="#" role="menuitem">profit</a>
						</div>
				</div>
				<ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
						<li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
				</ul>
		</div>
		<div class="widget-content tab-content bg-white p-20">
				<div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
				<div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
				<div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
		</div>
</div>
</div>

</div>
</div>
<!--/ Products sell and New Orders -->
<!-- Recent Transactions -->
<div class="row">
	<div class="card">
		
	</div>
</div>
<!--/ Recent Transactions -->

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
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/charts/chartist.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/charts/raphael-min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/charts/morris.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/customizer.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>