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
		<title>Invoice Template </title>
		<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">

		<!-- BEGIN: Vendor CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
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
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/pages/invoice.min.css">
		<!-- END: Page CSS-->

		<!-- BEGIN: Custom CSS-->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
							<h3 class="content-header-title">Invoice Template</h3>
							<div class="row breadcrumbs-top">
								<div class="breadcrumb-wrapper col-12">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="index">Home</a>
										</li>
										<li class="breadcrumb-item"><a href="#">Invoice</a>
										</li>
										<li class="breadcrumb-item active">Invoice Template
										</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="content-header-right col-md-3 col-12">
							<div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
								<button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
								<div class="dropdown-menu"><a class="dropdown-item" href="component-alerts"> Alerts</a><a class="dropdown-item" href="material-component-cards"> Cards</a><a class="dropdown-item" href="component-progress"> Progress</a>
									<div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image"> Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-overlay"></div>
			<div class="content-wrapper">
				<div class="content-body"><section class="card">
	<div id="invoice-template" class="card-body p-4">
		<!-- Invoice Company Details -->
		<div id="invoice-company-details" class="row">
			<div class="col-sm-6 col-12 text-center text-sm-left">
				<div class="media row">
					<div class="col-12 col-sm-3 col-xl-2">
						<img src="<?php echo BASE_URL; ?>app-assets/images/logo/logo-80x80.png" alt="company logo" class="mb-1 mb-sm-0" />
					</div>
					<div class="col-12 col-sm-9 col-xl-10">
						<div class="media-body">
							<ul class="ml-2 px-0 list-unstyled">
								<li class="text-bold-800">Modern Creative Studio</li>
								<li>4025 Oak Avenue,</li>
								<li>Melbourne,</li>
								<li>Florida 32940,</li>
								<li>USA</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-12 text-center text-sm-right">
				<h2>INVOICE</h2>
				<p class="pb-sm-3"># INV-001001</p>
				<ul class="px-0 list-unstyled">
					<li>Balance Due</li>
					<li class="lead text-bold-800">$12,000.00</li>
				</ul>
			</div>
		</div>
		<!-- Invoice Company Details -->

		<!-- Invoice Customer Details -->
		<div id="invoice-customer-details" class="row pt-2">
			<div class="col-12 text-center text-sm-left">
				<p class="text-muted">Bill To</p>
			</div>
			<div class="col-sm-6 col-12 text-center text-sm-left">
				<ul class="px-0 list-unstyled">
					<li class="text-bold-800">Mr. Bret Lezama</li>
					<li>4879 Westfall Avenue,</li>
					<li>Albuquerque,</li>
					<li>New Mexico-87102.</li>
				</ul>
			</div>
			<div class="col-sm-6 col-12 text-center text-sm-right">
				<p><span class="text-muted">Invoice Date :</span> 06/05/2019</p>
				<p><span class="text-muted">Terms :</span> Due on Receipt</p>
				<p><span class="text-muted">Due Date :</span> 10/05/2019</p>
			</div>
		</div>
		<!-- Invoice Customer Details -->

		<!-- Invoice Items Details -->
		<div id="invoice-items-details" class="pt-2">
			<div class="row">
				<div class="table-responsive col-12">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Item & Description</th>
								<th class="text-right">Rate</th>
								<th class="text-right">Hours</th>
								<th class="text-right">Amount</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>
									<p>Create PSD for mobile APP</p>
									<p class="text-muted">Simply dummy text of the printing and typesetting industry.
									</p>
								</td>
								<td class="text-right">$20.00/hr</td>
								<td class="text-right">120</td>
								<td class="text-right">$2400.00</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>
									<p>iOS Application Development</p>
									<p class="text-muted">Pellentesque maximus feugiat lorem at cursus.</p>
								</td>
								<td class="text-right">$25.00/hr</td>
								<td class="text-right">260</td>
								<td class="text-right">$6500.00</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<p>WordPress Template Development</p>
									<p class="text-muted">Vestibulum convallis.</p>
								</td>
								<td class="text-right">$20.00/hr</td>
								<td class="text-right">300</td>
								<td class="text-right">$6000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 col-12 text-center text-sm-left">
					<p class="lead">Payment Methods:</p>
					<div class="row">
						<div class="col-sm-8">
							<div class="table-responsive">
								<table class="table table-borderless table-sm">
									<tbody>
										<tr>
											<td>Bank name:</td>
											<td class="text-right">ABC Bank, USA</td>
										</tr>
										<tr>
											<td>Acc name:</td>
											<td class="text-right">Amanda Orton</td>
										</tr>
										<tr>
											<td>IBAN:</td>
											<td class="text-right">FGS165461646546AA</td>
										</tr>
										<tr>
											<td>SWIFT code:</td>
											<td class="text-right">BTNPP34</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-12">
					<p class="lead">Total due</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Sub Total</td>
									<td class="text-right">$14,900.00</td>
								</tr>
								<tr>
									<td>TAX (12%)</td>
									<td class="text-right">$1,788.00</td>
								</tr>
								<tr>
									<td class="text-bold-800">Total</td>
									<td class="text-bold-800 text-right"> $16,688.00</td>
								</tr>
								<tr>
									<td>Payment Made</td>
									<td class="pink text-right">(-) $4,688.00</td>
								</tr>
								<tr class="bg-grey bg-lighten-4">
									<td class="text-bold-800">Balance Due</td>
									<td class="text-bold-800 text-right">$12,000.00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-center">
						<p class="mb-0 mt-1">Authorized person</p>
						<img src="<?php echo BASE_URL; ?>app-assets/images/pages/signature-scan.png" alt="signature" class="height-100" />
						<h6>Amanda Orton</h6>
						<p class="text-muted">Managing Director</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Invoice Footer -->
		<div id="invoice-footer">
			<div class="row">
				<div class="col-sm-7 col-12 text-center text-sm-left">
					<h6>Terms & Condition</h6>
					<p>Test pilot isn't always the healthiest business.</p>
				</div>
				<div class="col-sm-5 col-12 text-center">
					<button type="button" class="btn btn-info btn-print btn-lg my-1"><i class="la la-paper-plane-o mr-50"></i>
						Print
						Invoice</button>
				</div>
			</div>
		</div>
		<!-- Invoice Footer -->

	</div>
</section>

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
		<!-- END: Page Vendor JS-->

		<!-- BEGIN: Theme JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/customizer.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/footer.min.js"></script>
		<!-- END: Theme JS-->

		<!-- BEGIN: Page JS-->
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
		<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/invoice-template.min.js"></script>
		<!-- END: Page JS-->

	</body>
	<!-- END: Body-->
</html>