<?php
include_once __DIR__ .'/includes/loader.php';
$auth = new Auth();
if(isset($_POST['login'])){
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("user",$username,time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("userpassword",$password,time()+ (10 * 365 * 24 * 60 * 60));
} else {
    if(isset($_COOKIE["user"])) {
        setcookie ("user","");
        if(isset($_COOKIE["userpassword"])) {
            setcookie ("userpassword","");
         }
    }
}
$login = $auth->login($username, $password);
if ($login){
  $_SESSION['user']=$username;
  header('Location: dashboard');
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
<title>Login</title>
<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/fonts/material-icons/material-icons.min.css">
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/material-vendors.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/vendors/css/forms/icheck/custom.css">
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
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>app-assets/css/pages/login-register.min.css">
<!-- END: Page CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
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
                              <img src="<?php echo BASE_URL; ?>app-assets/images/logo/logo-dark.png" alt="branding logo">
                          </div>
                          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Enter Username And Password To Login</span></h6>
                      </div>
                      <div class="card-content">
                          <div class="card-body">
                              <form class="form-horizontal" method="post" action="" validate>
                                  <fieldset class="form-group position-relative has-icon-left">
                                      <input name="username" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>" type="text" class="form-control" id="user-name" placeholder="Your Username" required>
                                      <div class="form-control-position">
                                          <i class="la la-user"></i>
                                      </div>
                                  </fieldset>
                                  <fieldset class="form-group position-relative has-icon-left">
                                      <input type="password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" name="password" class="form-control" id="user-password" placeholder="Enter Password" required>
                                      <div class="form-control-position">
                                          <i class="la la-key"></i>
                                      </div>
                                  </fieldset>
                                  <div class="form-group row">
                                      <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                          <fieldset>
                                              <input name="remember" type="checkbox" <?php if(isset($_COOKIE['user'])){echo 'checked';} ?>  id="remember-me" class="chk-remember">
                                              <label for="remember-me"> Remember Me</label>
                                          </fieldset>
                                      </div>
                                      <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="" class="card-link">Forgot Password?</a></div>
                                  </div>
                                  <button name="login" type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                              </form>
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
<!-- BEGIN: Vendor JS-->
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/material-vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="<?php echo BASE_URL; ?>app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/core/app.min.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/pages/material-app.min.js"></script>
<script src="<?php echo BASE_URL; ?>app-assets/js/scripts/forms/form-login-register.min.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>