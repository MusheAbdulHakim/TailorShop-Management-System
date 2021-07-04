<!DOCTYPE html>
<html class="loading"  data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ucfirst($title)}} - {{ucfirst(config('app.name'))}}</title>
        <link rel="shortcut icon" href="@if(!empty(AppSettings::get('favicon'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/ico/favicon.ico')}} @endif" type="image/x-icon">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/fonts/material-icons/material-icons.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/material-icons/material-icons.min.css')}}">

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/material-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
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
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/animate/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-callout.min.css')}}">

        @stack('page-css')
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
         <!-- END: Custom CSS-->

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
                            @stack('breadcrumb')
                        </div>
                        <div class="content-header-right col-md-3 col-12">
                            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                                @stack('breadcrumb-button')
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


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        @include('includes.footer')
        <!-- END: Footer-->


    </body>
    <!-- END: Body-->
     <!-- BEGIN: Vendor JS-->
     <script src="{{asset('app-assets/vendors/js/material-vendors.min.js')}}"> </script>
     <!-- BEGIN Vendor JS-->

     <!-- BEGIN: Page Vendor JS-->
     <script src="{{asset('app-assets/vendors/js/animation/jquery.appear.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/jszip.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/pdfmake.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/vfs_fonts.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/buttons.html5.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/buttons.print.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/tables/buttons.colVis.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
     <!-- END: Page Vendor JS-->

     <!-- BEGIN: Theme JS-->
     <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
     <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/customizer.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/footer.min.js')}}"></script>
     <!-- END: Theme JS-->

     <!-- BEGIN: Page JS-->
     <script src="{{asset('app-assets/js/scripts/animation/animation.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/pages/material-app.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.min.js')}}"></script>
     <script src="{{asset('app-assets/js/scripts/extensions/toastr.min.js')}}"></script>
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
     
     @stack('page-js')
     <!-- END: Page JS-->
     <!-- Custom JS-->
     <script src="{{asset('js/app.js')}}"></script>
     <!-- END: Custom JS-->
</html>
