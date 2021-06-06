<!DOCTYPE html>
<html
    class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ucfirst($title)}} - {{ucfirst(config('app.name'))}}</title>
        <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
        <link
        rel="stylesheet" type="text/css" href="app-assets/fonts/material-icons/material-icons.min.css">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/material-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/material.min.css">
         <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/material-extended.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/material-colors.min.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/material-vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/animate/animate.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
        <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-callout.min.css">
        @yield('page-css')
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- END: Custom CSS-->

    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->
    <body class="vertical-layout vertical-menu material-vertical-layout material-layout 2-columns  bg-full-screen-image fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        <!-- BEGIN: Header-->
        @include('includes.header')
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        @include('includes.sidebar')
        <!-- END: Main Menu-->
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-header row">
                <div class="content-header-light col-12">
                    <div class="row">
                        <div class="content-header-left col-md-9 col-12 mb-2">
                            @yield('breadcrumb')
                        </div>
                        <div class="content-header-right col-md-3 col-12">
                            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                                @yield('breadcrumb-button')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <x-alerts.danger :error="$error" />
                    @endforeach
                @endif
                <div class="content-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Customizer-->
        <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block">
            <a class="customizer-close" href="#">
                <i class="ft-x font-medium-3"></i>
            </a>
            <a class="customizer-toggle bg-danger box-shadow-3" href="#">
                <i class="ft-settings font-medium-3 spinner white"></i>
            </a>
            <div class="customizer-content p-2">
                <h4 class="text-uppercase mb-0">Theme Customizer</h4>
                <hr>
                <p>Customize & Preview in Real Time</p>
                <h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
                <div
                    class="form-group">
                    <!-- Outline Button group -->
                    <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
                        <button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
                    </div>
                </div>
                <hr>
                <h5 class="mt-1 text-bold-500">Layout Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified layout-options">
                    <li class="nav-item">
                        <a class="nav-link layouts active" id="baseIcon-tab21" data-toggle="tab" aria-controls="tabIcon21" href="#tabIcon21" aria-expanded="true">Layouts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navigation" id="baseIcon-tab22" data-toggle="tab" aria-controls="tabIcon22" href="#tabIcon22" aria-expanded="false">Navigation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar" id="baseIcon-tab23" data-toggle="tab" aria-controls="tabIcon23" href="#tabIcon23" aria-expanded="false">Navbar</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div role="tabpanel" class="tab-pane active" id="tabIcon21" aria-expanded="true" aria-labelledby="baseIcon-tab21">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
                            <label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
                            <label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
                            <label class="custom-control-label" for="static-layout">Static Layout</label>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabIcon22" aria-labelledby="baseIcon-tab22">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
                            <label class="custom-control-label" for="native-scroll">Native Scroll</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
                            <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
                            <label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
                            <label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
                            <label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
                            <label class="custom-control-label" for="static-navigation">Static Navigation</label>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabIcon23" aria-labelledby="baseIcon-tab23">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
                            <label class="custom-control-label" for="brand-center">Brand Center</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
                            <label class="custom-control-label" for="navbar-static-top">Static Top</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
                <ul class="nav nav-tabs nav-underline nav-justified color-options">
                    <li class="nav-item w-100">
                        <a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="#clrOpt1" aria-expanded="false">Semi Light</a>
                    </li>
                    <li class="nav-item  w-100">
                        <a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="#clrOpt2" aria-expanded="false">Semi Dark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3" aria-expanded="false">Dark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4" aria-expanded="true">Light</a>
                    </li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
                        <div class="row">
                            <div class="col-6">
                                <h6>Solid</h6>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default">
                                    <label class="custom-control-label" for="default">Default</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary">
                                    <label class="custom-control-label" for="primary">Primary</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger">
                                    <label class="custom-control-label" for="danger">Danger</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success">
                                    <label class="custom-control-label" for="success">Success</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
                                    <label class="custom-control-label" for="blue">Blue</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
                                    <label class="custom-control-label" for="cyan">Cyan</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
                                    <label class="custom-control-label" for="pink">Pink</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6>Gradient</h6>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
                                    <label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
                                    <label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
                                    <label class="custom-control-label" for="bg-gradient-x-success">Success</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
                                    <label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
                                    <label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
                            <label class="custom-control-label" for="opt-default">Default</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
                            <label class="custom-control-label" for="opt-primary">Primary</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
                            <label class="custom-control-label" for="opt-danger">Danger</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
                            <label class="custom-control-label" for="opt-success">Success</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
                            <label class="custom-control-label" for="opt-blue">Blue</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
                            <label class="custom-control-label" for="opt-cyan">Cyan</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
                            <label class="custom-control-label" for="opt-pink">Pink</label>
                        </div>
                    </div>
                    <div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
                        <div class="row">
                            <div class="col-6">
                                <h3>Solid</h3>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
                                    <label class="custom-control-label" for="solid-blue-grey">Default</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
                                    <label class="custom-control-label" for="solid-primary">Primary</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
                                    <label class="custom-control-label" for="solid-danger">Danger</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
                                    <label class="custom-control-label" for="solid-success">Success</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
                                    <label class="custom-control-label" for="solid-blue">Blue</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
                                    <label class="custom-control-label" for="solid-cyan">Cyan</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
                                    <label class="custom-control-label" for="solid-pink">Pink</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <h3>Gradient</h3>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
                                    <label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
                                    <label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
                                    <label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
                                    <label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
                                    <label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
                                    <label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
                                </div>
                                <div class="custom-control custom-radio mb-1">
                                    <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
                                    <label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
                            <label class="custom-control-label" for="light-blue-grey">Default</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
                            <label class="custom-control-label" for="light-primary">Primary</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
                            <label class="custom-control-label" for="light-danger">Danger</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
                            <label class="custom-control-label" for="light-success">Success</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
                            <label class="custom-control-label" for="light-blue">Blue</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
                            <label class="custom-control-label" for="light-cyan">Cyan</label>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
                            <label class="custom-control-label" for="light-pink">Pink</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Customizer-->


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        @include('includes.footer')
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/material-vendors.min.js"> </script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/animation/jquery.appear.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
        <script src="app-assets/vendors/js/tables/jszip.min.js"></script>
        <script src="app-assets/vendors/js/tables/pdfmake.min.js"></script>
        <script src="app-assets/vendors/js/tables/vfs_fonts.js"></script>
        <script src="app-assets/vendors/js/tables/buttons.html5.min.js"></script>
        <script src="app-assets/vendors/js/tables/buttons.print.min.js"></script>
        <script src="app-assets/vendors/js/tables/buttons.colVis.min.js"></script>
        <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/core/app-menu.min.js"></script>
        <script src="app-assets/js/core/app.min.js"></script>
        <script src="app-assets/js/scripts/customizer.min.js"></script>
        <script src="app-assets/js/scripts/footer.min.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/material-app.min.js"></script>
        <script src="app-assets/js/scripts/animation/animation.js"></script>
        <script src="app-assets/js/scripts/pages/material-app.min.js"></script>
	    <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.min.js"></script>
        <script src="app-assets/js/scripts/extensions/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', '') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;

                
            }
            @endif
        </script>

        <script>
            $(document).ready(function (){
                $('.deletebtn').on('click',function (){
                    $('#deleteConfirmModal').modal('show');
                    var id = $(this).data('id');
                    $('#delete_id').val(id);

                });
            });
        </script>

        @yield('page-js')
        <!-- END: Page JS-->


    </body>
    <!-- END: Body-->
</html>
