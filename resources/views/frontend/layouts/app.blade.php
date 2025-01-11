<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '格尚資訊')</title>
    <meta name="description" content="@yield('description', '格尚資訊')">
    <meta name="keywords" content="@yield('keywords', '格尚資訊')">

    <meta property="og:title" content="@yield('title', '格尚資訊')">
    <meta property="og:description" content="@yield('description', '格尚資訊')">
    <meta property="og:image" content="@yield('image', 'https://www.gst.com/frontend/assets/images/logo-2-192x192.png')">
    <meta property="og:url" content="@yield('url', 'https://www.gst.com')">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo-2-192x192.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('frontend/assets/images/logo-2-192x192.png') }}" type="image/png">
    <!--- End favicon-->

    <link
        href="css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <!-- End google font  -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/splitting.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Code Editor  -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css?v=' . time()) }}">

    @stack('css')

</head>

<body class="light">

    <div class="sofax-preloader-wrap">
        <div class="sofax-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- progress bar -->

    <div class="progress-bar-container">
        <div class="progress-bar"></div>
    </div>

    <!-- progress circle -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
            <div class="top-arrow">
                <img src="{{ asset('frontend/assets/images/arrowtop.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- End All Js -->

    <header class="site-header sofax-header-section site-header--menu-center inner-header dark-bg" id="sticky-menu">
        <div class="container">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                    <a href='index.htm'>
                        <img src="{{ asset('frontend/assets/images/logo/logo-1.png') }}" alt=""
                            class="light-version-logo">
                    </a>
                </div>

                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item nav-item-has-children">
                                <a href="{{ route('home') }}" class="nav-link-item drop-trigger">首頁 </a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class='nav-link-item drop-trigger'>服務項目
                                    <i class="fas fa-angle-down"></i>
                                </a>

                                <ul class="sub-menu" id="submenu-1">

                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.erp') }}">
                                            <span class="menu-item-text">
                                                ERP 導入服務
                                            </span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.project') }}">
                                            <span class="menu-item-text">
                                                專案開發
                                            </span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.software') }}">
                                            <span class="menu-item-text">
                                                軟體銷售
                                            </span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.server') }}">
                                            <span class="menu-item-text">
                                                機房規劃建置
                                            </span>
                                        </a>
                                    </li>

                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.outsourcing') }}">
                                            <span class="menu-item-text">
                                                資訊委外服務
                                            </span>
                                        </a>
                                    </li>

                                    <li class="sub-menu--item">
                                        <a href="{{ route('services.hardware') }}">
                                            <span class="menu-item-text">
                                                硬體銷售
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link-item' href='#'>關於我們</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link-item' href='#'>聯絡我們</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger ">
                    <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
            </nav>
        </div>
    </header>
    <!--End landex-header-section -->

    @yield('content')

    <footer class="sofax-footer-section">
        <div class="container">
            <div class="sofax-footer-top">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="sofax-footer-wrap">
                            <a href="{{ route('home') }}"><img
                                    src="{{ asset('frontend/assets/images/logo/logo-dark.svg') }}"
                                    alt=""></a>
                            <p>格尚資訊是專業的資訊服務公司，提供ERP導入、專案開發、軟體銷售、機房規劃建置、資訊委外服務、硬體銷售等服務。</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="sofax-footer-menu ml-100 sofax-footer-active">
                            <h5>服務項目</h5>
                            <ul>
                                <li><a href="{{ route('services.erp') }}">ERP 導入服務</a></li>
                                <li><a href="{{ route('services.project') }}">專案開發</a></li>
                                <li><a href="{{ route('services.software') }}">軟體銷售</a></li>
                                <li><a href="{{ route('services.server') }}">機房規劃建置</a></li>
                                <li><a href="{{ route('services.outsourcing') }}">資訊委外服務</a></li>
                                <li><a href="{{ route('services.hardware') }}">硬體銷售</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="sofax-footer-menu ml-100 sofax-footer-active">
                            <h5>隱私權政策</h5>
                            <ul>
                                <li><a href="{{ route('privacy') }}">隱私權政策</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="sofax-footer-menu ml-100 sofax-footer-active">
                            <h5>關於我們</h5>
                            <ul>
                                <li><a href='#'>關於我們</a></li>
                                <li><a href='#'>聯絡我們</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sofax-footer-bottom center">
                <p>© <span id="current-year"></span> Mthemeus All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/menu/menu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/skill-bar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/pricing-switcher.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/top-to-bottom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-animation.js') }}"></script>


    <!-- <script src="assets/js/scrollsmooth.js"></script> -->
    <script src="{{ asset('frontend/assets/js/accordion.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>

    @stack('js')

</body>

</html>
