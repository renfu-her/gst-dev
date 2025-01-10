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

    <header class="site-header sofax-header-section site-header--menu-center" id="sticky-menu">
        <div class="container">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                    <a href='index.htm'>
                        <img src="{{ asset('frontend/assets/images/logo/logo-dark.svg') }}" alt=""
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
                            <li class="nav-item">
                                <a class='nav-link-item drop-trigger'>服務項目
                                    <i class="fas fa-angle-down"></i>
                                </a>

                                <ul class="sub-menu">
                                    <li><a href="#">ERP 導入服務</a></li>
                                    <li><a href="#">專案開發</a></li>
                                    <li><a href="#">軟體銷售</a></li>
                                    <li><a href="#">機房規劃建置</a></li>
                                    <li><a href="#">資訊委外服務</a></li>
                                    <li><a href="#">硬體銷售</a></li>
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

                <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                    <a class='sofax-default-btn pill sofax-header-btn' data-text='Get started'
                        href='contact-us.html'>
                        <span class="button-wraper">Get started</span>
                    </a>
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
                    <div class="col-xl-4 col-md-12">
                        <div class="sofax-footer-wrap mr-15">
                            <a href='index.htm'><img src="{{ asset('frontend/assets/images/logo/logo-dark.svg') }}"
                                    alt=""></a>
                            <p>格尚資訊是專業的資訊服務公司，提供ERP導入、專案開發、軟體銷售、機房規劃建置、資訊委外服務、硬體銷售等服務。</p>
                            {{-- <div class="sofax-social-icon">
                                <ul>
                                    <li>
                                        <a href="https://www.twitter.com/">
                                            <svg width="17" height="18" viewbox="0 0 17 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.96447 7.24539L16.1975 0H14.7205L9.30833 6.29107L4.98567 0H0L6.5367 9.51321L0 17.1111H1.47711L7.19246 10.4675L11.7575 17.1111H16.7432L9.9641 7.24539H9.96447ZM7.94136 9.59702L7.27906 8.64972L2.00933 1.11194H4.27809L8.53082 7.19517L9.19312 8.14247L14.7212 16.0497H12.4524L7.94136 9.59739V9.59702Z"
                                                    fill="#0E0E0E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <svg width="11" height="18" viewbox="0 0 11 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.88663 0.00357362L7.65153 0C5.14046 0 3.5177 1.65905 3.5177 4.22688V6.17575H1.27039C1.0762 6.17575 0.918945 6.33263 0.918945 6.52614V9.34984C0.918945 9.54335 1.07638 9.70005 1.27039 9.70005H3.5177V16.8251C3.5177 17.0187 3.67495 17.1754 3.86914 17.1754H6.80123C6.99543 17.1754 7.15268 17.0185 7.15268 16.8251V9.70005H9.7803C9.9745 9.70005 10.1318 9.54335 10.1318 9.34984L10.1328 6.52614C10.1328 6.43323 10.0957 6.34425 10.0299 6.27849C9.9641 6.21274 9.87444 6.17575 9.7812 6.17575H7.15268V4.52367C7.15268 3.72961 7.34257 3.3265 8.3806 3.3265L9.88627 3.32597C10.0803 3.32597 10.2375 3.16909 10.2375 2.97575V0.353788C10.2375 0.160634 10.0805 0.00393098 9.88663 0.00357362Z"
                                                    fill="#0E0E0E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <svg width="18" height="17" viewbox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.043 0H5.9475C3.14256 0 0.86792 2.26664 0.86792 5.06173V11.1358C0.86792 13.9309 3.14256 16.1975 5.9475 16.1975H12.043C14.8479 16.1975 17.1226 13.9309 17.1226 11.1358V5.06173C17.1226 2.26664 14.8479 0 12.043 0ZM15.5987 11.1358C15.5987 13.0896 14.0037 14.679 12.043 14.679H5.9475C3.98678 14.679 2.39179 13.0896 2.39179 11.1358V5.06173C2.39179 3.1079 3.98678 1.51852 5.9475 1.51852H12.043C14.0037 1.51852 15.5987 3.1079 15.5987 5.06173V11.1358Z"
                                                    fill="#0E0E0E"></path>
                                                <path
                                                    d="M9.00312 4.05713C6.75896 4.05713 4.93945 5.87024 4.93945 8.10651C4.93945 10.3428 6.75896 12.1559 9.00312 12.1559C11.2473 12.1559 13.0668 10.3428 13.0668 8.10651C13.0668 5.87024 11.2473 4.05713 9.00312 4.05713ZM9.00312 10.6374C7.60319 10.6374 6.46333 9.50153 6.46333 8.10651C6.46333 6.71049 7.60319 5.57565 9.00312 5.57565C10.4031 5.57565 11.5429 6.71049 11.5429 8.10651C11.5429 9.50153 10.4031 10.6374 9.00312 10.6374Z"
                                                    fill="#0E0E0E"></path>
                                                <path
                                                    d="M13.3527 4.29821C13.653 4.29821 13.8964 4.05602 13.8964 3.75726C13.8964 3.4585 13.653 3.21631 13.3527 3.21631C13.0525 3.21631 12.8091 3.4585 12.8091 3.75726C12.8091 4.05602 13.0525 4.29821 13.3527 4.29821Z"
                                                    fill="#0E0E0E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://bd.linkedin.com/">
                                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.877 15.0112V15.0106H15.8807V9.49947C15.8807 6.8034 15.2983 4.72656 12.1353 4.72656C10.6147 4.72656 9.59433 5.55805 9.17775 6.34633H9.13377V4.97826H6.13477V15.0106H9.25755V10.0429C9.25755 8.73498 9.50637 7.47022 11.1318 7.47022C12.7335 7.47022 12.7573 8.96289 12.7573 10.1268V15.0112H15.877Z"
                                                    fill="#0E0E0E"></path>
                                                <path d="M1.0498 4.99463H4.17636V15.0269H1.0498V4.99463Z"
                                                    fill="#0E0E0E"></path>
                                                <path
                                                    d="M2.62114 0C1.62147 0 0.810303 0.808321 0.810303 1.80448C0.810303 2.80063 1.62147 3.62586 2.62114 3.62586C3.62081 3.62586 4.43198 2.80063 4.43198 1.80448C4.43135 0.808321 3.62018 0 2.62114 0V0Z"
                                                    fill="#0E0E0E"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="sofax-footer-menu ml-100 sofax-footer-active">
                            <h5>服務項目</h5>
                            <ul>
                                <li><a href='#'>ERP 導入服務</a></li>
                                <li><a href='#'>專案開發</a></li>
                                <li><a href='#'>軟體銷售</a></li>
                                <li><a href='#'>機房規劃建置</a></li>
                                <li><a href='#'>資訊委外服務</a></li>
                                <li><a href='#'>硬體銷售</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-12">
                        <div class="sofax-footer-menu ml-100 sofax-footer-active">
                            <h5>隱私權政策</h5>
                            <ul>
                                <li><a href='#'>隱私權政策</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-12">
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
