<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofax | SASS & Startup Tailwind Template</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Site font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/iconfonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/webfonts/fonts.css') }}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/jos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendors/menu.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

    <!-- Development css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}" /> -->


    @stack('css')

</head>

<body class="relative">
    <div class="page-wrapper relative">
        <!-- ...::: Header Section Start :::... -->
        <header class="section-header site-header fixed top-0 z-30 w-full py-2">
            <!-- Section Container -->
            <div class="container">
                <!-- Header Area -->
                <div class="flex items-center justify-between">
                    <!-- Header Left Block -->
                    <div>
                        <!-- Header Logo -->
                        <a class='h-auto w-auto' href='index.htm'>
                            <img src="{{ asset('frontend/assets/img/images/logo.png') }}" alt="logo" width="112"
                                height="40">
                        </a>
                        <!-- Header Logo -->
                    </div>
                    <!-- Header Left Block -->

                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="ri-arrow-left-s-fill"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Demo <i
                                            class="ri-arrow-down-s-fill"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-0">
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Multi Page
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-1">
                                                <li class="sub-menu--item">
                                                    <a href='index.htm'>Sales Management</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-2.html'>Crypto App</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-3.html'>Team Management</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-4.html'>SMM Agency</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-5.html'>Digital Agency </a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-6.html'>CRM</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-7.html'>AI SAAS</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-8.html'>IT Services</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-9.html'>Email Marketing</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-10.html'>Web Hosting</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">One Page
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-9">
                                                <li class="sub-menu--item">
                                                    <a href='index-op-1.html'>Sales Management</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-2.html'>Crypto App</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-3.html'>Team Management</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-4.html'>SMM Agency</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-5.html'>Digital Agency </a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-6.html'>CRM</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-7.html'>AI SAAS</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-8.html'>IT Services</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-9.html'>Email Marketing</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='index-op-10.html'>Web Hosting</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class='nav-link-item' href='about.html'>About</a>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Services
                                        <i class="ri-arrow-down-s-fill"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-2">
                                        <li class="sub-menu--item">
                                            <a href='services.html'>Services</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='service-details.html'>Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Blog
                                        <i class="ri-arrow-down-s-fill"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-3">
                                        <li class="sub-menu--item">
                                            <a href='blog.html'>Blogs</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='blog-details.html'>Blogs Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Pages <i
                                            class="ri-arrow-down-s-fill"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-4">
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-5">
                                                <li class="sub-menu--item">
                                                    <a href='team.html'>Teams</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='team-details.html'>Teams Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-6">
                                                <li class="sub-menu--item">
                                                    <a href='portfolio.html'>Portfolio</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='portfolio-details.html'>Portfolio Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Careers
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-7">
                                                <li class="sub-menu--item">
                                                    <a href='career.html'>Careers</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='career-details.html'>Careers Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a class='drop-trigger' data-menu-get='h3' href='faq.html'>FAQ
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a class='drop-trigger' data-menu-get='h3' href='pricing.html'>Pricing
                                            </a>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                                <i class="ri-arrow-right-s-fill"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-8">
                                                <li class="sub-menu--item">
                                                    <a href='terms-condition.html'>Terms & Condition</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='login.html'>Login</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='signup.html'>Signup</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='reset-password.html'>Reset Password</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='coming-soon.html'>Coming Soon</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href='error-404.html'>Error 404</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class='nav-link-item' href='contact.html'>Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header Right Block -->
                    <div class="flex items-center gap-x-6">
                        <a class='btn btn-primary relative hidden min-w-0 px-[30px] py-[10px] sm:inline-flex'
                            href='contact.html'>
                            <span>Contact Us</span>
                            <span>Contact Us</span>
                        </a>

                        <!-- Responsive Offcanvas Menu Button -->
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span
                                    class="bg-colorTextTitle before:bg-colorTextTitle after:bg-colorTextTitle"></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header Right Block -->
                </div>
                <!-- Header Area -->
            </div>
            <!-- Section Container -->
        </header>
        <!-- ...::: Header Section End :::... -->

        <!-- Main Wrapper -->
        <main class="main-wrapper relative overflow-x-clip">
            @yield('content')
        </main>
        <!-- Main Wrapper -->

        <!--...::: Footer Section Start :::... -->
        <footer class="section-footer">
            <!-- Footer Top -->
            <div class="pb-14 pt-14 lg:pt-[100px]">
                <!-- Container -->
                <div class="container">
                    <!-- Footer Top Area -->
                    <div class="flex flex-wrap gap-10 xl:justify-between">
                        <!-- Footer Widget - Info -->
                        <div class="max-w-sm">
                            <a class='inline-block' href='index.htm'>
                                <img src="{{ asset('frontend/assets/img/images/logo.png') }}" alt="logo"
                                    width="112" height="40">
                            </a>
                            <p class="my-6">
                                Sofax is best softwere platform manage your sales depends on
                                your specific business needs budget & industry.
                            </p>

                            <div class="flex gap-6">
                                <a href="https://www.x.com" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-colorGrey text-lg hover:bg-colorPurpleLight">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                                <a href="https://www.x.com" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-colorGrey text-lg hover:bg-colorPurpleLight">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="https://www.x.com" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-colorGrey text-lg hover:bg-colorPurpleLight">
                                    <i class="ri-instagram-line"></i>
                                </a>
                                <a href="https://www.x.com" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-colorGrey text-lg hover:bg-colorPurpleLight">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Footer Widget - Info -->

                        <!-- Footer Widget - Navigation -->
                        <div>
                            <span class="display-heading display-heading-5 mb-6 block">Company</span>

                            <nav class="flex flex-col gap-y-4">
                                <a class='hover:font-medium hover:text-colorTextTitle' href='about.html'>About Us</a>
                                <a class='hover:font-medium hover:text-colorTextTitle' href='contact.html'>Contact
                                    US</a>
                                <a class='hover:font-medium hover:text-colorTextTitle'
                                    href='terms-condition.html'>Privacy Policy
                                </a>
                                <a class='hover:font-medium hover:text-colorTextTitle'
                                    href='terms-condition.html'>Terms & Conditions</a>
                            </nav>
                        </div>
                        <!-- Footer Widget - Navigation -->

                        <!-- Footer Widget - Navigation -->
                        <div>
                            <span class="display-heading display-heading-5 mb-6 block">Utility Pages</span>

                            <div class="flex flex-col gap-y-4">
                                <a class='hover:font-medium hover:text-colorTextTitle'
                                    href='contact.html'>Instructions</a>
                                <a class='hover:font-medium hover:text-colorTextTitle' href='contact.html'>Style
                                    Guide</a>
                                <a class='hover:font-medium hover:text-colorTextTitle' href='error-404.html'>404 Pages
                                </a>
                                <a class='hover:font-medium hover:text-colorTextTitle'
                                    href='contact.html'>Licenses</a>
                            </div>
                        </div>
                        <!-- Footer Widget - Navigation -->

                        <!-- Footer Widget - Apps -->
                        <div>
                            <span class="display-heading display-heading-5 mb-6 block">Download Now</span>

                            <div class="flex flex-col gap-y-4 text-left">
                                <a href="https://www.apple.com/app-store" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('frontend/assets/img/images/home-1/apple-apps-store.png') }}"
                                        alt="apple-apps-store" width="170" height="54">
                                </a>
                                <a href="https://play.google.com/store/games" target="_blank"
                                    rel="noopener noreferrer">
                                    <img src="{{ asset('frontend/assets/img/images/home-1/google-play-store.png') }}"
                                        alt="google-play-store" width="170" height="50">
                                </a>
                            </div>
                        </div>
                        <!-- Footer Widget - Apps -->
                    </div>
                    <!-- Footer Top Area -->
                </div>
                <!-- Container -->
            </div>
            <!-- Footer Top -->

            <!-- Footer Bottom -->
            <div>
                <!-- Container -->
                <div class="container">
                    <div class="border-t border-colorGrey py-9 text-center">
                        © 2024 Mthemeus All Rights Reserved.
                    </div>
                </div>
                <!-- Container -->
            </div>
            <!-- Footer Bottom -->
        </footer>
        <!--...::: Footer Section Start :::... -->
    </div>

    <!--Vendor js-->
    <script src="{{ asset('frontend/assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/jos.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendors/menu.js') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    @stack('js')

</body>

</html>
