<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adara online shop details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('f0rontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <style>
        .star-card {
            max-width: 33rem;
            background: #fff;
            margin: 0 1rem;
            padding: 1rem;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            width: 100%;
            border-radius: 0.5rem;
        }

        .icon-star {
            font-size: 10vh;
            cursor: pointer;
        }

        .one {
            color: red;
        }

        .two {
            color: yellow;
        }

        .three {
            color: orange;
        }

        .four {
            color: greenyellow;
        }

        .five {
            color: green;
        }
        .tarifLabel {
            user-select: none;
            display: inline-block;
            background-color: #eee;
            color: #888;
            /* padding: 0  10px; */
            font-family: sans-serif, Arial;
            border: 7px solid #ddd;
            border-radius: 50%;
            cursor: pointer;
            margin-right: 4px;
        }
        .colorRadio {
            opacity: 0;
            position: fixed;
            width: 0;
        }
        .colorRadio:checked+label {
            background-color: green;
            border-color: green;
            color:#fff;
        }

    </style>
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
    <header class="header-style-three">
        <div class="header-top-wrap">
            <div class="container custom-container-two">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul>
                                <li><a href="about-us.html">About US</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="tel:123456789">+998333733085</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-right">
                            <div class="lang">
                                <select name="select">
                                    <option value="">English</option>
                                    <option value="">Spanish</option>
                                    <option value="">Turkish</option>
                                    <option value="">Russian</option>
                                    <option value="">Chinese</option>
                                </select>
                            </div>
                            <div class="currency">
                                <form action="#">
                                    <select name="select">
                                        <option value="">USD</option>
                                        <option value="">AUE</option>
                                        <option value="">SAR</option>
                                        <option value="">INR</option>
                                        <option value="">BDT</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header menu-area">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">

                                    <a href="index.html"><img src="{{ asset($settings->site_logo) }}"
                                            alt=""></a>


                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children has--mega--menu"><a href="{{ route('main.page') }}">Home</a>
                                            <ul class="mega--menu--wrap scroll">
                                                <li>
                                                    <a href="index.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_01.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style One</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_02.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_03.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_04.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style four</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_05.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style five</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-6.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_06.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style six</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_07.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style seven</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-8.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_08.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style eight</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-9.html">
                                                        <span class="img"><img
                                                                src="{{ asset('frontend/assets/img/home-demo/home_09.jpg') }}"
                                                                alt=""></span>
                                                        <span class="text">Home style nine</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="active has--mega--menu"><a href="#">Shop</a>
                                            <ul class="mega-menu">
                                                <li class="mega-menu-wrap">
                                                    <ul class="mega-menu-col">
                                                        <li class="mega-title"><a href="shop.html">SHOP PAGES</a></li>
                                                        <li><a href="shop-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop.html">Hidden sidebar</a></li>
                                                        <li><a href="shop.html">Filters area</a></li>
                                                        <li class="active"><a href="shop-details.html">Shop
                                                                Details</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-col">
                                                        <li class="mega-title"><a href="#">FEATURES</a></li>
                                                        <li><a href="shop-sidebar.html">Variable Product</a></li>
                                                        <li><a href="shop-sidebar.html">External Product</a></li>
                                                        <li><a href="shop-sidebar.html">Other Shop Pages</a></li>
                                                        <li><a href="shop-sidebar.html">Categories</a></li>
                                                        <li><a href="shop-sidebar.html">Collection</a></li>
                                                        <li><a href="shop-sidebar.html">LookBook</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <img src="{{ asset('frontend/assets/img/product/sub_menu_img01.jpg') }}"
                                                                    alt="">
                                                                <span class="btn">Man Shop</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <img src="{{ asset('frontend/assets/img/product/sub_menu_img02.jpg') }}"
                                                                    alt="">
                                                                <span class="btn">Women’s Shop</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
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
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                        <li class="header-profile"><a href=""><i
                                                    class="flaticon-user"></i></a></li>
                                        <li class="header-wishlist"><a href="#"><i
                                                    class="flaticon-heart-shape-outline"></i></a></li>
                                        <li class="header-shop-cart"><a href="#"><i
                                                    class="flaticon-shopping-bag"></i><span>0</span></a>
                                            <ul class="minicart">
                                               @foreach ($orders as $order)
                                               <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset( $order->product->image )}}"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">{{ $order->product->name }}</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">{{ $order->product->price - ( $order->product->price * ($order->product->discount / 100))}}</span>
                                                        <span><del>{{ $order->product->price }}</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                               @endforeach

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
                                        <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i
                                                    class="flaticon-menu-button-of-three-horizontal-lines"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                            alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <ul class="navigation">
                                        <li class="menu-item-has-children"><a href="">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                                <li><a href="index-6.html">Home Six</a></li>
                                                <li><a href="index-7.html">Home Seven</a></li>
                                                <li><a href="index-8.html">Home Eight</a></li>
                                                <li><a href="index-9.html">Home Nine</a></li>
                                            </ul>
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                <li class="active"><a href="">Shop Details</a></li>
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
                                    <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                                </div>
                                <div class="content-box">
                                    <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                    </p>
                                </div>
                                <div class="contact-info">
                                    <h4 class="title">CONTACT US</h4>
                                    <ul>
                                        <li><span class="flaticon-phone-call"></span><a
                                                href="tel:123456789">{{ $settings->phone }}</a></li>
                                        <li><span class="flaticon-email"></span><a
                                                href="mailto:adara@info.com">{{ $settings->email }}</a></li>
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
        {{-- {{ $product_ids }} --}}

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-style-two"
            data-background="{{ asset('frontend/assets/img/bg/s_breadcrumb_bg01.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="previous-product">
                            <a
                                href="{{ route('main.show', $products->id == 1 ? $products->id : $products->id - 1) }}"><i
                                    class="fas fa-angle-left"></i> previous product</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Winter 20</a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Women</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tracker Jacket</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="next-product">
                            <a href="{{ route('main.show', $products->id + 1) }}">Next product <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
        <section class="shop-details-area pt-100 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="shop-details-flex-wrap">
                            <div class="shop-details-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach ($products->images as $image)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link {{ $loop->index == 0 ? 'active' : '' }}"
                                                id="-product{{ $image->id }}-tab" data-toggle="tab"
                                                href="#product-{{ $image->id }}" role="tab"
                                                aria-controls="{{ $image->id }}" aria-selected="true"><img
                                                    src="{{ asset($image->image) }}" alt="">
                                            </a>
                                        </li>
                                    @endforeach


                                </ul>

                            </div>
                            <div class="shop-details-img-wrap">
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($products->images as $image)
                                        <div class="tab-pane fade {{ $loop->index == 0 ? 'show active' : '' }}"
                                            id="product-{{ $image->id }}" role="tabpanel"
                                            aria-labelledby="product-{{ $image->id }}-tab">
                                            <div class="shop-details-img">
                                                <img src="{{ asset($image->image) }}" width="532" height="500"
                                                    alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-details-content">

                            <a href="#" class="product-cat">{{ $products->category->name }}</a>
                            <h3 class="title">{{ $products->name }}</h3>

  <form action="{{ route('add.order') }}" method="POST" class="rating">
    @csrf
    <input type="number" name="product_id"  value="{{ $products->id }}" hidden>
                                {{-- {{ $products->reviewsCount()->avg('rating') }} --}}
                                @php
                                    $rating = round($products->reviewsCount()->avg('rating'));
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $rating) {

                                            echo " <i class='fas fa-star' style='color: green'></i> ";
                                        } else {
                                            echo "<i class='fas fa-star' style='color: red'></i>";
                                        }
                                    }

                                @endphp
<br><br>
                            <p style="color:deepskyblue" class="style-name">Style Name : {{ $products->about }}</p>
                            <div class="price">Price : {{ $products->price }}</div>
                            <div class="product-details-info">
                                <span>Size <a href="#">Guide</a></span>
                                <div class="sidebar-product-size mb-30">
                                    <h4 class="widget-title">Product Size</h4>
                                    <div class="shop-size-list">

                  <ul>

                      @foreach ($products->sizes as $size)
                          <input class="radioSize" type="radio" name="sizes"
                              id="{{ $size->id }}" value="{{ $size->sizeItem->id }}" hidden required>

                          <li class="mr-1" onclick="setActiveSize({{ $size->id }})">
                              <label for="{{ $size->id }}">
                                  {{ $size->sizeItem->name }}
                              </label>
                          </li>
                      @endforeach


                  </ul>

          </div>
      </div>
      <div class="sidebar-product-color">
          <h4 class="widget-title">Color</h4>
          <div class="shop-color-list">
              <ul>
                  @foreach ($products->colors as $color)
                  {{-- {{ $color->colorItem->id }} --}}
                  <input type="radio"  name="color_id" class="colorRadio"
                          id="{{ $color->colorItem->color }}" value="{{$color->colorItem->id }}" hidden required >
                          <label for="{{ $color->colorItem->color }}"  class="tarifLabel">
                          <li

                          style="height:20px; width:20px; border-radius:50%; background-color:{{ $color->colorItem->color }};">
                      </li>
                  </label>

                  @endforeach


              </ul>
          </div>
      </div>
  </div>
  <div class="perched-info">
      <div class="cart-plus-minus">
          <div class="num-block">
              <input type="text" class="in-num" name="count" value="1">
              <div class="qtybutton-box">
                  <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                  <span class="minus dis"><i class="fa fa-minus" aria-hidden="true"></i></span>
              </div>
            </div>
      </div>

      <button type = "submit" class="btn"> add to cart</button>

      <div class="wishlist-compare">
          <ul>
              <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
              <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a>
              </li>
          </ul>
      </div>
  </div>
  <div class="product-details-share">
      <ul>
          <li>Share :</li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
      </ul>
  </div>
</form>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-desc-wrap">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab"
                                        href="#description" role="tab" aria-controls="description"
                                        aria-selected="true">Description Guide</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews"
                                        role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="product-desc-title mb-30">
                                        <h4 class="title">Additional information :</h4>
                                    </div>
                                    <p style="color:green">{{ $products->description }}</p>

                                    <div class="color-size-info">
                                        <ul>
                                            <li style="color:aqua"><span>COLORS :</span>
                                                @foreach ($products->colors as $color)
                                                    {{ $color->colorItem->color }}
                                                @endforeach
                                            </li>
                                            <li style="color: gold "><span>SIZES :</span>

                                                @foreach ($products->sizes as $size)
                                                    .

                                                    {{ $size->sizeItem->name }}
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="additional-table">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Size Name</th>
                                                        @foreach ($products->sizes as $size)
                                                            <td>{{ $size->sizeItem->name }}</td>
                                                        @endforeach



                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Waist Stretch</th>
                                                        <td>19</td>
                                                        <td>38</td>
                                                        <td>31</td>
                                                        <td>55</td>
                                                        <td>44</td>
                                                        <td>34</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Hip (7½” below from waist)</th>
                                                        <td>11</td>
                                                        <td>18</td>
                                                        <td>21</td>
                                                        <td>55</td>
                                                        <td>44</td>
                                                        <td>34</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">length (Out seam)</th>
                                                        <td>28</td>
                                                        <td>31</td>
                                                        <td>19</td>
                                                        <td>55</td>
                                                        <td>44</td>
                                                        <td>34</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <p style="color:red">{{ $products->about }}</p>

                                </div>
                                {{-- {{ $products->reviews }} --}}
                                <div class="tab-pane fade" id="reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="product-desc-title mb-30">


                                        <h4 class="title">Reviews ({{ count($products->reviewsCount) }}) :</h4>
                                    </div>
                                    <p>Your email address will not be published. Required fields are marked</p>
                                    @foreach ($products->reviews as $review)
                                        <h3 class="p-0 m-0" style="color: blue">{{ $review->client->fullname }}</h3>
                                        <div class="d-flex mb-1">
                                            <p class="adara-review-title p-0 m-0">{{ $review->comment }}</p>
                                            <div class="rating pl-2">
                                                @php
                                                    $rating = $review->rating;
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($i <= $rating) {
                                                            echo "<i class='fas fa-star' style='color: green'></i>";
                                                        } else {
                                                            echo "<i class='fas fa-star' style='color: red'></i>";
                                                        }
                                                    }
                                                @endphp

                                            </div>
                                        </div>
                                        <hr style="height: 1px; background-color:black; border: none;">
                                    @endforeach

                                    <span>Your rating *</span>

                                    <div class="rating">
                                        <span class="star"><i onclick="gfg(1)" class="fas fa-star h4"></i></span>
                                        <span class="star"><i onclick="gfg(2)" class="fas fa-star h4"></i></span>
                                        <span class="star"><i onclick="gfg(3)" class="fas fa-star h4"></i></span>
                                        <span class="star"><i onclick="gfg(4)" class="fas fa-star h4"></i></span>
                                        <span class="star"><i onclick="gfg(5)" class="fas fa-star h4"></i></span>
                                        {{-- <h3 id="output">
                                                Rating is: 0/5
                                            </h3> --}}

                                    </div>
                                    <form action="{{ route('add.client', $products->id) }}" method="GET"
                                        class="comment-form review-form">
                                        @csrf
                                        <span>Your review *</span>
                                        <input type="text" hidden name="rating" id="output" required>
                                        <textarea name="comment" id="comment-message" placeholder="Your Comment" required></textarea>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="fullname" placeholder="Your Name*"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Your Email*"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" name="password" placeholder="Your Password*"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="comment-check-box">
                                            <input type="checkbox" id="comment-check">
                                            <label for="comment-check">Save my name and email in this browser for the
                                                next time I comment.</label>
                                        </div>
                                        <button class="btn" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>H
                </div>
                <div class="related-product-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="related-product-title">
                                <h4 class="title">You May Also Like...</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row related-product-active">
                        @foreach ($product as $item)
                            <div class="col-xl-3">
                                <div class="new-arrival-item text-center">
                                    <div class="thumb mb-25">
                                        <a href="{{ route('main.show', $item->id) }}"><img
                                                src="{{ asset($item->image) }}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="{{ route('main.show', $item->id) }}"><i
                                                            class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="{{ route('main.show', $item->id) }}">{{ $item->name }}</a>
                                        </h5>
                                        <span class="price">{{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer class="gray-bg footer-style-two footer-style-three pt-75">
        <div class="container">
            <div class="footer-top-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset($settings->site_logo) }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle-wrap pt-45 pb-20">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">COMPANY</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="shop.html">Store Locations</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">STORE</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">Category</h4>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="shop-sidebar.html">Women</a></li>
                                    <li><a href="shop-sidebar.html">Men</a></li>
                                    <li><a href="shop-sidebar.html">Baby</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <h4 class="fw-title">FOLLOW US</h4>
                            <div class="footer-text">
                                <p>Get Free Shipping on all your orders!</p>
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
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>&copy; 2024 <a href="index.html">Adara</a>. All Rights Reserved | +998333733085</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pay-method-img">
                            <img src="{{ asset('frontend/assets/img/images/payment_method_img.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <script>
        var sizeRadio = document.querySelectorAll('.sizeRadio');

        function setActiveSize(type) {
            if (type == "size") {
                sizeRadio.forEach(function(input) {
                    input.addEventListener('change', function() {
                        sizeRadio.forEach(function(input) {
                            var label = document.querySelector('label[for="' + input.id + '"]');
                            if (input.checked) {
                                label.classList.add('active');
                            } else {
                                label.classList.remove('active');
                            }
                        });
                    });
                });
            }

        }
    </script>
    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
        // script.js

        // To access the stars
        let stars =
            document.getElementsByClassName("star");
        let output =
            document.getElementById("output");

        function gfg(n) {
            remove();
            for (let i = 0; i < n; i++) {
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                stars[i].className = "star " + cls;
            }
            output.value = n;

        }

        // To remove the pre-applied styling
        function remove() {
            let i = 0;
            while (i < 5) {
                stars[i].className = "star";
                i++;
            }
        }
    </script>
</body>

</html>

