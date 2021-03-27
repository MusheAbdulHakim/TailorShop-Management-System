<!-- BEGIN: Main Menu-->
		<div class="main-menu material-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
				<div class="user-profile">
						<div class="user-info text-center pt-1 pb-1"><img class="user-img img-fluid rounded-circle" src="<?php echo BASE_URL; ?>uploads/users/<?php echo get_avatar(); ?>" />
								<div class="name-wrapper d-block dropdown"><a class="white dropdown-toggle ml-2" id="user-account" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-name"><?php get_fullname(); ?></span></a>
										
										<div class="dropdown-menu arrow" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"><i class="material-icons align-middle mr-1">person</i><span class="align-middle">Profile</span></a><a class="dropdown-item"><i class="material-icons align-middle mr-1">settings</i><span class="align-middle">Settings</span></a>
										<a href="<?php echo BASE_URL; ?>logout" class="dropdown-item"><i class="material-icons align-middle mr-1">power_settings_new</i><span class="align-middle">Log Out</span></a></div>
								</div>
						</div>
				</div>
				<div class="main-menu-content">
						<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
								<li class=" nav-item"><a href="<?php echo BASE_URL; ?>dashboard"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
								</li>
							
								<li class=" nav-item"><a href="<?php echo BASE_URL; ?>orders"><i class="ft ft-shopping-cart"></i><span class="menu-title" data-i18n="Order">Orders</span></a>
								</li>

								<li class=" nav-item"><a href="<?php echo BASE_URL; ?>customers"><i class="ft ft-users"></i><span class="menu-title" data-i18n="Customers">Customers</span></a>
								</li>
								<li class=" nav-item"><a href="<?php echo BASE_URL; ?>measurements"><i class="ft ft-user"></i><span class="menu-title" data-i18n="Customers">Customer Measurement</span></a>
								</li>
								<li class=" nav-item"><a href="<?php echo BASE_URL; ?>users"><i class="la la-users"></i><span class="menu-title" data-i18n="Customers">Users</span></a>
								</li>
								<li class=" nav-item"><a href="#"><i class="material-icons">people_outline</i><span class="menu-title" data-i18n="Staff">Staff Management</span></a>
										<ul class="menu-content">
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>designation"><i class="material-icons"></i><span data-i18n="designations">Designation</span></a>
												</li>
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>staff"><i class="material-icons"></i><span data-i18n="staff">Staff</span></a>
												</li>
										</ul>
								</li>

								<li class=" nav-item"><a href="#"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="Expense management">Expense Management</span></a>
										<ul class="menu-content">
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>expense-categories"><i class="material-icons"></i><span data-i18n="Expense Categories">Expense Categories</span></a>
												</li>
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>expenses"><i class="material-icons"></i><span data-i18n="Expenses">Expenses</span></a>
												</li>
										</ul>
								</li>

								<li class=" nav-item"><a href="#"><i class="la la-money"></i><span class="menu-title" data-i18n="Income management">Income Management</span></a>
										<ul class="menu-content">
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>income-categories"><i class="material-icons"></i><span data-i18n="Income Categories">Income Categories</span></a>
												</li>
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>income"><i class="material-icons"></i><span data-i18n="Income">Income</span></a>
												</li>
										</ul>
								</li>

								<li class=" nav-item"><a href="#"><i class="material-icons">face</i><span class="menu-title" data-i18n="Measurement Settings">Measurement Settings</span></a>
										<ul class="menu-content">
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>cloth-types"><i class="material-icons"></i><span data-i18n="Cloth Types">Cloth Types</span></a>
												</li>
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>measurement-parts"><i class="material-icons"></i><span data-i18n="Measurement Parts">Measurement Parts</span></a>
												</li>
										</ul>
								</li>

								<li class=" nav-item"><a href="#"><i class="material-icons">settings</i><span class="menu-title" data-i18n="Settings">Settings</span></a>
										<ul class="menu-content">
												<li><a class="menu-item" href="<?php echo BASE_URL; ?>settings"><i class="material-icons"></i><span data-i18n="general settings">General Settings</span></a>
												</li>
																								
										</ul>
								</li>
								
						</ul>
				</div>
		</div>
		<!-- END: Main Menu-->