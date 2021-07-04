<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<title>{{ucfirst($title)}} - {{ucfirst(config('app.name'))}}</title>
<link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" href="@if(!empty(AppSettings::get('favicon'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/ico/favicon.ico')}} @endif" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/material-icons/material-icons.min.css')}}">
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
<!-- END: Vendor CSS-->
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-extended.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/material-colors.min.css')}}">
<!-- END: Theme CSS-->
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/material-vertical-menu.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.min.css')}}">
<!-- END: Page CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
 <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu material-vertical-layout material-layout 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
<div class="content-header row">
</div>
<div class="content-overlay"></div>
<div class="content-wrapper">
  <div class="content-body">
      <section class="row flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                  <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                      <div class="card-header border-0">
                          <div class="card-title text-center">
                            <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/logo/logo.png')}} @endif">
                            <h3 class="brand-text">{{ucfirst(setting('app_name', config('app.name')))}}</h3>
                          </div>
                          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>@yield('card-subtitle')</span></h6>
                      </div>
					  @if ($errors->any())
						@foreach ($errors->all() as $error)
							<x-alerts.danger :error="$error" />
						@endforeach
					  @endif
                      <div class="card-content">
                          <div class="card-body">
                              @yield('content')
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
</div>
</div>
<!-- END: Content-->

</body>
<!-- END: Body-->
<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/material-vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/pages/material-app.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/forms/form-login-register.min.js')}}"></script>
<!-- END: Page JS-->
<!-- Custom JS-->
<script src="{{asset('js/app.js')}}"></script>
<!-- END: Custom JS-->
</html>