<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $settings->site_title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

    </head>
    <body>
        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->


        <!-- header-area -->
        <header>
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset($settings->site_logo) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-6">
                            <div class="header-top-offer">
                                <p>SUMMER SALE UP TO <span>70% OFF.</span> SHOP NOW</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="header-top-action">
                                <ul>
                                    <li class="sign-in"><a href="{{ route('client.login') }}">Sign In</a></li>
                                    <li class="wish-list"><a href=""><i class="flaticon-heart-shape-outline"></i></a></li>
                                    <li class="header-shop-cart"><a href="cart.html"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="img/product/cart_p01.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="img/product/cart_p02.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Winter Jackets For Women</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="#">Shopping Cart</a>
                                                    <a class="black-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area black-bg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <a href="index.html" class="main-logo"><img src="{{ asset('frontend/assets/img/logo/w_logo.png') }}" alt="Logo"></a>
                                        <a href="index.html" class="sticky-logo"><img src="img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="header-category d-none d-lg-block">
                                        <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>ALL DEPARTMENT</a>
                                        <ul class="category-menu">
                                            <li class="has-dropdown"><a href="#">Accessories & Parts</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="#">Cables & Adapters</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Batteries</a></li>
                                            <li><a href="#">Chargers</a></li>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Electronic Cigarettes</a></li>
                                            <li><a href="#">Audio & Video</a></li>
                                            <li><a href="#">Televisions</a></li>
                                            <li><a href="#">TV Receivers</a></li>
                                            <li class="has-dropdown"><a href="#">Projectors</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                            <li><a href="#">TV Sticks</a></li>
                                        </ul>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                             <li class="active"><a href="{{ route('main.page') }}">Home</a></li>
                                           <li><a class="active" href="">Shop</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="shipping-offer">Free Shipping on Orders <span>$39+</span></li>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search-interface-symbol"></i></a></li>
                                            <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="img/icon/sidebar_toggle_icon.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="submenu">
                                                    {{-- <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                    <li><a href="index-5.html">Home Five</a></li>
                                                    <li><a href="index-6.html">Home Six</a></li>
                                                    <li><a href="index-7.html">Home Seven</a></li>
                                                    <li><a href="index-8.html">Home Eight</a></li>
                                                    <li><a href="index-9.html">Home Nine</a></li> --}}
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="cart.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">

                                    <div class="logo mb-30">
                                        <a href="index.html"><img src="{{ $settings->site_logo }}" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>WooCommerce and WordPress are both free, open source software reasons many ...</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a href="tel:123456789">{{ $settings->phone }}</a></li>
                                            <li><span class="flaticon-email"></span><a href="mailto:adara@info.com">{{ $settings->email }}</a></li>
                                            <li><span class="flaticon-place"></span>{{ $settings->address }}</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email...">
                                            <button class="btn">Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="oc-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="oc-bottom">
                                        <div class="currency">
                                            <form action="#">
                                                <label>Currency</label>
                                                <select name="select">
                                                    <option value="">USD</option>
                                                    <option value="">AUE</option>
                                                    <option value="">SAR</option>
                                                    <option value="">INR</option>
                                                    <option value="">BDT</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="language">
                                            <form action="#">
                                                <label>Language</label>
                                                <select name="select">
                                                    <option value="">English</option>
                                                    <option value="">Spanish</option>
                                                    <option value="">Turkish</option>
                                                    <option value="">Russian</option>
                                                    <option value="">Chinese</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- off-canvas-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="slider-area position-relative">
                <div class="container-fluid p-0 fix">
                    <div class="main-slider-active">
                        @foreach ($offers as $offer)
                        <div class="single-slider">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="slider-main-img" data-background="{{ asset($offer->first_bg_image) }}"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-bg" data-background="{{ asset($offer->second_bg_image) }}">
                                        <div class="slider-content">
                                            <h3 class="sub-title animated" data-animation-in="fadeInUp" data-delay-in=".2">{{ $offer->first_title }}</h3>
                                            <h2 class="title animated" data-animation-in="fadeInUp" data-delay-in=".4">{{ $offer->second_title }}</h2>
                                            <p class="animated" data-animation-in="fadeInUp" data-delay-in=".6">{{ $offer->content }}</p>
                                            <a href="shop-sidebar.html" class="btn animated" data-animation-in="fadeInUp" data-delay-in=".8">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="slider-bottom-nav">
                        <div class="main-slider-nav">
                            @foreach ($offers as $offer)
                            <div class="slider-nav-item">
                                <img src="{{ asset($offer->image) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

            <!-- category-banner -->
            <section class="category-banner-area pt-30">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12 col-sm-10">
                            <div class="cat-banner-item banner-animation mb-20">
                                <a href="shop-sidebar.html"><img src="{{ asset($settings->left_image) }}" width="800px" height="780px" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cat-banner-item banner-animation mb-20">
                                        <div class="thumb">
                                            <a href="shop-sidebar.html"><img src="{{ asset($settings->top_left_image) }}"  width="390"alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span>NEW COLLECTION</span>
                                            <h3><a href="shop-sidebar.html">SHOP MEN'S</a></h3>
                                            <a href="shop-sidebar.html" class="btn">shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cat-banner-item banner-animation mb-20">
                                        <div class="thumb">
                                            <a href="shop-sidebar.html"><img src="{{ asset($settings->top_right_image) }}" width="390"alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span>NEW COLLECTION</span>
                                            <h3><a href="shop-sidebar.html"> shop phone's</a></h3>
                                            <a href="shop-sidebar.html" class="btn">shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="cat-banner-item style-two banner-animation mb-20">
                                        <div class="thumb">
                                            <a href="shop-sidebar.html"><img src="{{ asset($settings->bottom_image) }}" width="750"alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span>NEW COLLECTION</span>
                                            <h3><a href="shop-sidebar.html">man jacket's</a></h3>
                                            <a href="shop-sidebar.html" class="btn">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- category-banner-end -->

            <!-- promo-services -->
            <section class="promo-services pt-50 pb-25">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon01.png" alt=""></div>
                                <div class="content">
                                    <h6>payment & delivery</h6>
                                    <p>Delivered, when you receive arrives</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon02.png" alt=""></div>
                                <div class="content">
                                    <h6>Return Product</h6>
                                    <p>Retail, a Product Return Process</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon03.png" alt=""></div>
                                <div class="content">
                                    <h6>money back guarantee</h6>
                                    <p>Options Including 24/7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="promo-services-item mb-40">
                                <div class="icon"><img src="img/icon/promo_icon04.png" alt=""></div>
                                <div class="content">
                                    <h6>Quality support</h6>
                                    <p>Support Options Including 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- promo-services-end -->

            <!-- features-product-area -->
            <section class="features-products gray-bg pt-95 pb-100">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title text-center mb-25">
                                <h3 class="title">FEATURED PRODUCTS</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <ul class="nav nav-tabs features-product-nav" id="myTab" role="tablist">
                                @foreach ($news as  $category)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{ $loop->index == 0 ? "active": "" }}" id="category{{ $category->id }}-tab" data-toggle="tab" href="#category-{{ $category->id }}" role="tab" aria-controls="category-{{ $category->id }}" aria-selected="true">{{ $category->name }} </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($news as  $category)
                        <div class="tab-pane {{ $loop->index == 0 ? "show active": "" }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="category-{{ $category->id }}-tab" >

                            <div class="row features-product-active">

                                @foreach ($category->products->where('type' , 'future') as $product )
                                <div class="col">

                                    <div class="features-product-item mb-30">
                                        <div class="features-product-thumb">
                                       @if ($product->discount > 0)
                                       <div class="discount-tag">-{{ $product->discount}}%</div>
                                          @endif

                                            <a href="{{ route('main.show' , $product->id) }}">
                                                <img src="{{ asset($product->image) }}" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="features-product-content">

                                            <div class="rating">
                                                @php
                                                    $rating = round($product->ratings()->avg('rating'));
                                                    for ($i=1; $i <= 5; $i++) {
                                                        if($i <= $rating){
                                                            echo "<i class='fas fa-star' style='color: green'></i>";
                                                        }else{
                                                            echo "<i class='fas fa-star' style='color: red'></i>";
                                                        }


                                                    }
                                                @endphp

                                            </div>
                                            <h5><a href="{{ route('main.show', $product->id) }}">Name:{{ $product->name }}</a></h5>
                                            <p class="price">Price:{{ $product->price }}</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                         @foreach ($product->colors as $color)
                                                         @php
                                            // print_r($color->colorItem->color);
                                                        @endphp

                                                        <span style="height:18px; width:18px; border-radius:50%; background-color:{{ $color->colorItem->color }};"></span>
                                                        @endforeach


                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>

                                </div>
                                @endforeach

                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- features-product-area-end -->

            <!-- discount-area -->
            <!--full bg image-->
            <section class="discount-area discount-bg jarallax parallax-img" data-background="{{ asset($settings->full_bg_image) }}">
                <div class="container">
                    <div class="row justify-content-center justify-content-lg-start">
                        <div class="col-lg-6 col-md-10">
                            <div class="discount-content text-center">
                                <div class="icon mb-15"><img src="img/icon/discount_icon.png" alt=""></div>
                                <span>{{ $settings->stock_name }}</span>
                                <h2>Winter Collection End of Season Sale upto 30%</h2>
                                <a href="shop-sidebar.html" class="btn">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- discount-area-end -->

            <!-- trending-product-area -->
            <section class="trending-product-area pt-95 pb-100">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title text-center mb-45">
                                <h3 class="title">Trending Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters trending-product-grid">
                        <div class="col-2">
                            <div class="trending-products-list">
                                <h5>Clothing</h5>
                                <ul class="nav nav-tabs" id="trendingTab" role="tablist">
                                    @foreach ($news as $cate)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{ $loop->index == 0 ? "active": "" }}" id="new-{{ $cate->id }}-tab" data-toggle="tab" href="#new-{{ $cate->id }}" role="tab" aria-controls="new-{{ $cate->id }}" aria-selected="true">{{ $cate->name }} </a>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content tp-tab-content" id="trendingTabContent">
                                @foreach ($news as $cate)
                                <div class="tab-pane {{ $loop->index == 0 ? "show active": "" }}" id="new-{{ $cate->id }}" role="tabpanel" aria-labelledby="new-{{ $cate->id }}-tab" >
                                    <div class="trending-products-banner banner-animation">
                                        <a href="shop-sidebar.html"><img src="{{ asset($cate->image) }}" width="370" height="460" alt=""></a>
                                    </div>
                                    <div class="row trending-product-active">
                                        @foreach ($cate->products->where('type' , 'trending')  as $product)
                                        <div class="col">

                                            <div class="features-product-item mb-30">
                                                <div class="features-product-thumb">
                                               @if ($product->discount > 0)
                                               <div class="discount-tag">-{{ $product->discount}}%</div>
                                                  @endif

                                                    <a href="{{ route('main.show' , $product->id) }}">
                                                        <img src="{{ asset($product->image) }}" alt="">
                                                    </a>
                                                    <div class="product-overlay-action">
                                                        <ul>
                                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="features-product-content">

                                                    <div class="rating">
                                                        @php
                                                            $rating = round($product->ratings()->avg('rating'));
                                                            for ($i=1; $i <= 5; $i++) {
                                                                if($i <= $rating){
                                                                    echo "<i class='fas fa-star' style='color: green'></i>";
                                                                }else{
                                                                    echo "<i class='fas fa-star' style='color: red'></i>";
                                                                }


                                                            }
                                                        @endphp

                                                    </div>
                                                    <h5><a href="{{ route('main.show' , $product->id) }}">Name:{{ $product->name }}</a></h5>
                                                    <p class="price">Price:{{ $product->price }}</p>
                                                    <div class="features-product-bottom">
                                                        <ul>
                                                            <li class="color-option">
                                                                 @foreach ($product->colors as $color)
                                                                 @php
                                                    // print_r($color->colorItem->color);
                                                                @endphp

                                                                <span style="height:18px; width:18px; border-radius:50%; background-color:{{ $color->colorItem->color }};"></span>
                                                                @endforeach


                                                            </li>
                                                            <li class="limited-time"><a href="#">LImited-time Offer!</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                            </div>

                                        </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- trending-product-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area">
                <div class="container">
                    <div class="row" >
                        <div class="col-12">
                            <div class="newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
                                <div class="newsletter-title mb-65">
                                    <h2 class="title" style="color: aqua">NEWSLETTER!</h2>
                                    <h6 class="sub-title" style="background-color: gold ; color :black">NEWSLETTER AND GET DISCOUNT 25% OFF</h6>
                                </div>
                                <form action="{{ route('regster.news') }}" method="POST" class="newsletter-form">
                                    @csrf
                                    <input type="text" name="fullname" placeholder="Your Fullname..." required><br><br>
                                    <input type="email" name="email" placeholder="Your email address..." required><br><br>


                                    <input type="password" name="password" placeholder="Your  password..." required><br><hr>

                                    {{-- <button type="password"><span>Subscribe</span> <i class="far fa-arrow-alt-circle-right"></i></button> --}}
                                 <input type="submit" name="submit" placeholder="Submit" value="Submit">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

            <!-- brand-area -->
            <div class="brand-area pt-100 pb-100">
                <div class="container">
                      <div class="row brand-active">
                        @foreach ($partners as $partner)
                         <div class="col">
                            <div class="brand-item">
                                <a href="#"><img src="{{ asset($partner->image) }}" alt=""></a>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- instagram-post-area -->
            <div class="instagram-post-area">
                <div class="container-fluid p-0 fix">
                    <div class="row no-gutters insta-active">
                        @foreach ($ads as $item)


                        <div class="col">
                            <div class="insta-post-item">
                                <a href="https://t.me/abrorbekqodirovportifolio" target="_blank">
                                    <i class="fab fa-telegram"></i>
                                    <img src="{{ $item->image }}" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- instagram-post-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer class="dark-bg pt-55 pb-80">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logo/w_logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-link-wrap">
                                <nav class="menu-links">
                                    <ul>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="shop-sidebar.html">Store</a></li>
                                        <li><a href="#">Locations</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="contact.html">Support</a></li>
                                        <li><a href="#">Policy</a></li>
                                        <li><a href="#">Faqs</a></li>
                                    </ul>
                                </nav>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>&copy; 2024 <a href="index.html">Adara</a>. All Rights Reserved |+998333733085</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pay-method-img">
                                <img src="img/images/payment_method_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

		<!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

