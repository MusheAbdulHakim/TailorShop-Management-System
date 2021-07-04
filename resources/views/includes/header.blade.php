<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-primary navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <img class="brand-logo" alt="logo" src="@if(!empty(AppSettings::get('logo'))) {{asset('storage/'.AppSettings::get('logo'))}} @else{{asset('app-assets/images/logo/logo.png')}} @endif">
                        <h3 class="brand-text">{{ucfirst(setting('app_name', config('app.name')))}}</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="material-icons mt-50">more_vert</i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle" href="#">
                            <i class="ft-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav float-right">
                    
                    
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700">{{auth()->user()->name}}</span>
                            <span class="avatar avatar-online"><img src="@if(!empty(auth()->user()->avatar)){{asset('storage/avatars/'.auth()->user()->avatar)}}@else app-assets/images/portrait/small/avatar-s-1.png @endif" alt="avatar"><i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('user-profile')}}">
                                <i class="material-icons">person_outline</i>
                                Edit Profile</a>
                           
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="material-icons">power_settings_new</i>
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->