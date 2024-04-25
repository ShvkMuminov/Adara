@php

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
//dd($prefix);
@endphp

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        {{-- <img src="{{ asset('frontend/assets/images/logo.webp') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8">--}}
        <span class="brand-text font-weight-light ml-3">ADARA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('frontend/assets/images/logo.webp') }}" class="elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ ($route == 'dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.offer') }}"
                       class="nav-link {{ ($route == 'all.offer') ? 'active' : '' }}">
                        <i class="fas fa-bullhorn nav-icon"></i>
                        <p>Offer</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.product') }}"
                       class="nav-link {{ ($route == 'all.product') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.product_color') }}"
                       class="nav-link {{ ($route == 'all.product_color') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Product_color</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.product_set_color') }}"
                       class="nav-link {{ ($route == 'all.product_set_color') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Product_set_color</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.product_set_size') }}"
                       class="nav-link {{ ($route == 'all.product_set_size') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Product_set_size</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.product_image') }}"
                       class="nav-link {{ ($route == 'all.product_image') ? 'active' : '' }}">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Product_image</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.service') }}"
                       class="nav-link {{ ($route == 'all.service') ? 'active' : '' }}">
                        <i class="fas fa-th-large nav-icon"></i>
                        <p>Client</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.product_size') }}"
                       class="nav-link {{ ($route == 'all.product_size') ? 'active' : '' }}">
                        <i class="fas fa-th-large nav-icon"></i>
                        <p>Product size</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.news') }}"
                       class="nav-link {{ ($route == 'all.news') ? 'active' : '' }}">
                        <i class="far fa-newspaper nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all.partner') }}"
                       class="nav-link {{ ($route == 'all.partner') ? 'active' : '' }}">
                        <i class="fas fa-user-plus nav-icon"></i>
                        <p>Partner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.ads') }}"
                       class="nav-link {{ ($route == 'all.ads') ? 'active' : '' }}">
                        <i class="fas fa-user-plus nav-icon"></i>
                        <p>Ads</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.review') }}"
                       class="nav-link {{ ($route == 'all.review') ? 'active' : '' }}">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>Review</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.setting') }}"
                       class="nav-link {{ ($route == 'all.setting') ? 'active' : '' }}">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>Main</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
