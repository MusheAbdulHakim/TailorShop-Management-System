<!-- BEGIN: Main Menu-->

<div class="main-menu material-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="user-profile">
        <div class="user-info text-center pt-1 pb-1"><img class="user-img img-fluid rounded-circle" src="@if(!empty(auth()->user()->avatar)){{asset('storage/avatars/'.auth()->user()->avatar)}}@else {{asset('app-assets/images/portrait/small/avatar-s-1.png')}} @endif"/>
            <div class="name-wrapper d-block dropdown">
                <a class="white dropdown-toggle ml-2" id="user-account" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="user-name">{{auth()->user()->name}}</span>
                </a>
                <div class="text-light">Super Admin</div>
                <div class="dropdown-menu arrow" aria-labelledby="dropdownMenuLink">
                    <a href="{{route('user-profile')}}" class="dropdown-item">
                        <i class="material-icons align-middle mr-1">person</i>
                        <span class="align-middle">Profile</span>
                    </a>


                    <a href="{{route('logout')}}" class="dropdown-item">
                        <i class="material-icons align-middle mr-1">power_settings_new</i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            

            <li class="{{ Request::routeIs('orders') ? 'active' : '' }} nav-item">
                <a href="{{route('orders')}}">
                    <i class="ft ft-shopping-cart"></i>
                    <span class="menu-title" data-i18n="Order">Orders</span>
                </a>
            </li>

            <li class="{{ Request::routeIs('customers') ? 'active' : '' }} nav-item">
                <a href="{{route('customers')}}">
                    <i class="ft ft-users"></i>
                    <span class="menu-title" data-i18n="Customers">Customers</span>
                </a>
            </li>
           
            <li class="{{ Request::routeIs('users') ? 'active' : '' }} nav-item">
                <a href="{{route('users')}}">
                    <i class="la la-users"></i>
                    <span class="menu-title" data-i18n="Users">Users</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="material-icons">people_outline</i>
                    <span class="menu-title" data-i18n="Staff">Staff Management</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('designations') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('designations')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="designations">Designation</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('staff') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('staff')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="staff">Staff</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="la la-briefcase"></i>
                    <span class="menu-title" data-i18n="Expense management">Expense Management</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('expense-categories') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('expense-categories')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Expense Categories">Expense Categories</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('expenses') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('expenses')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Expenses">Expenses</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="la la-money"></i>
                    <span class="menu-title" data-i18n="Income management">Income Management</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('income-categories') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('income-categories')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Income Categories">Income Categories</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('income') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('income')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Income">Income</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="material-icons">face</i>
                    <span class="menu-title" data-i18n="Measurement Settings">Measurement Settings</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs('cloth-types') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route("cloth-types")}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Cloth Types">Cloth Types</span>
                        </a>
                    </li>
                    <li class="{{ Request::routeIs('measurement-parts') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('measurement-parts')}}">
                            <i class="material-icons"></i>
                            <span data-i18n="Measurement Parts">Measurement Parts</span>
                        </a>
                    </li>
                    
                    
                </ul>
            </li>

            <li class="nav-item {{ Request::routeIs('settings') ? 'active' : '' }}">
                <a href="{{route('settings')}}">
                    <i class="material-icons">settings</i>
                    <span class="menu-title" data-i18n="Setting">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
