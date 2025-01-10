@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Carousel -->
    <div class="sofax-slider-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- 指示器 -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- 轮播内容 -->
            <div class="carousel-inner">
                <!-- Slide 1: ERP導入服務 & 專案開發 -->
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/assets/images/banner/home-banner-01.webp') }}"
                        class="d-block w-100 h-100 object-fit-cover" alt="ERP與專案開發">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">企業資訊整合方案</h2>
                        <p class="fs-4">ERP導入服務 • 專案開發</p>
                        <a href="#" class="btn btn-primary btn-lg">了解更多</a>
                    </div>
                </div>

                <!-- Slide 2: 軟體銷售 & 機房規劃建置 -->
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/banner/home-banner-02.webp') }}"
                        class="d-block w-100 h-100 object-fit-cover" alt="軟體與機房服務">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">軟體與基礎建設</h2>
                        <p class="fs-4">軟體銷售 • 機房規劃建置</p>
                        <a href="#" class="btn btn-primary btn-lg">了解更多</a>
                    </div>
                </div>

                <!-- Slide 3: 資訊委外服務 & 硬體銷售 -->
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/banner/home-banner-03.webp') }}"
                        class="d-block w-100 h-100 object-fit-cover" alt="資訊委外與硬體服務">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">資訊服務與硬體支援</h2>
                        <p class="fs-4">資訊委外服務 • 硬體銷售</p>
                        <a href="#" class="btn btn-primary btn-lg">了解更多</a>
                    </div>
                </div>
            </div>

            <!-- 使用 Font Awesome 6 的控制按钮 -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left fa-2x"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right fa-2x"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="sofax-hero-section overflow-hidden">
        <div class="container">
            <div class="sofax-hero-content center">
                <h1 class="slider-custom-anim-left" data-ani="slider-custom-anim-left" data-ani-delay="0.3s">Best
                    platfrom to manage your sales</h1>
                <p>The best platform for you will depend on factors such as your business size, budget, integration
                    needs and specific sales processes. Offering visual pipeline management sales reporting & email
                    interation.</p>
            </div>
            <div class="sofax-subscription-field blog-details-subscribe-btn">
                <input type="email" placeholder="Enter your email ">
                <button id="sofax-subscription-btn" type="submit">Start a 14 days free trail</button>
            </div>
            <div class="sofax-rating-icon">
                <ul>
                    <li>
                        <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('frontend/assets/images/v1/rattinghalf.svg') }}" alt="">
                    </li>
                    <li>
                        4.8/5 rating software trusted by users
                    </li>
                </ul>
            </div>
            <div class="sofax-hero-thumb1 wow fadeInUpX">
                <img src="assets/images/v1/dashboard.png" alt="">
                <div class="sofax-hero-shape">
                    <img src="{{ asset('frontend/assets/images/v1/shape1.png') }}" alt="">
                </div>
                <div class="sofax-hero-shape2">
                    <img src="{{ asset('frontend/assets/images/v1/shape2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End sofax hero section -->
    <section class="sofax-slider-section">
        <div class="container">
            <div class="sofax-title-section">
                <h4>Trusted by 1600+ of the world's most popular companies</h4>
            </div>
            <div class="sofax-brand-slider">
                <div class="sofax-logo-icon-item">
                    <img src="{{ asset('frontend/assets/images/v1/waverio.png') }}" alt="">
                </div>
                <div class="sofax-logo-icon-item">
                    <img src="{{ asset('frontend/assets/images/v1/logoipsum.png') }}" alt="">
                </div>
                <div class="sofax-logo-icon-item">
                    <img src="{{ asset('frontend/assets/images/v1/alterbone.png') }}" alt="">
                </div>
                <div class="sofax-logo-icon-item">
                    <img src="{{ asset('frontend/assets/images/v1/carbonia.png') }}" alt="">
                </div>
                <div class="sofax-logo-icon-item">
                    <img src="{{ asset('frontend/assets/images/v1/tinygone.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--  end brand logo section -->
    <div class="section sofax-section-padding bg-light">
        <div class="container">
            <div class="sofax-section-title max-width-770 ">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="tg-heading-subheading animation-style3">
                            <h2>Solution to organize your sales in one place</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-flex justify-content-end align-items-center">
                        <div class="sofax-title-btn wow fadeInUpX">
                            <a class='sofax-default-btn pill' data-text='View all services' href='service.html'>
                                <span class="button-wraper">View all services</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-iconbox-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-iconbox-icon">
                            <img src="{{ asset('frontend/assets/images/v1/icon3.png') }}" alt="">
                        </div>
                        <div class="sofax-iconbox-data">
                            <h4>Workflow Automation</h4>
                            <p>Repetitive a tasks & workflows, such as email communications, follow-up, & data entry,
                                freeing up sales.</p>
                            <a class='sofax-icon-btn' href='single-service.html'>More details <img
                                    src="{{ asset('frontend/assets/images/v1/arrow-right.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-iconbox-wrap wow fadeInUpX" data-wow-delay="0.2s">
                        <div class="sofax-iconbox-icon">
                            <img src="{{ asset('frontend/assets/images/v1/icon2.png') }}" alt="">
                        </div>
                        <div class="sofax-iconbox-data">
                            <h4>Lead Management</h4>
                            <p>Tracking, qualifying and nurturing to customers or leads throughout their journey in the
                                sales pipeline.</p>
                            <a class='sofax-icon-btn' href='single-service.html'>More details <img
                                    src="{{ asset('frontend/assets/images/v1/arrow-right.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-iconbox-wrap wow fadeInUpX" data-wow-delay="0.3s">
                        <div class="sofax-iconbox-icon">
                            <img src="{{ asset('frontend/assets/images/v1/icon1.png') }}" alt="">
                        </div>
                        <div class="sofax-iconbox-data">
                            <h4>Sales Forecasting</h4>
                            <p>Analyzing past sales data, including sales volume, revenue customers to demographics &
                                seasonality.</p>
                            <a class='sofax-icon-btn' href='single-service.html'>More details <img
                                    src="{{ asset('frontend/assets/images/v1/arrow-right.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end service section -->
    <div class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sofax-content-img box-shadow mb-130 wow fadeInLeft">
                        <img src="{{ asset('frontend/assets/images/v1/contentthumb1.png') }}" alt="">
                        <div class="sofax-card-shape">
                            <img src="{{ asset('frontend/assets/images/v1/card.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sofax-default-content tac ml-50 mb-130 animation-title animation-style3">
                        <div class="tg-heading-subheading animation-style3">
                            <h2>Optimize your sales without any hassle</h2>
                        </div>
                        <p>Sales forecasting, & analytics that enable users to streamline their sales workflows,
                            identify areas for improvement and also make data-driven. </p>
                        <div class="extra-mt">
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('frontend/assets/images/v1/check-circle.png') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2">
                                    <h4>Streamline processes</h4>
                                    <p>Automate repetitive tasks such as lead nurturing, follow- ups and order to the
                                        processing with using salesphere.</p>
                                </div>
                            </div>
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('frontend/assets/images/v1/check-circle.png') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2">
                                    <h4>Understand your audience</h4>
                                    <p>Utilize salesphere to gather data and insights about your target audience. Their
                                        needs preferences & pain points.</p>
                                </div>
                            </div>
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('frontend/assets/images/v1/check-circle.png') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2">
                                    <h4>Utilize customer data</h4>
                                    <p>Use this data to understand your customers preferences behaviors and pain the
                                        points,tailor your sales pitches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 order-lg-2">
                    <div class="sofax-content-img2 position-ralatiove ml-31 wow fadeInRight">
                        <img src="{{ asset('frontend/assets/images/v1/contentimg2.png') }}" alt="">
                        <div class="sofax-content-shape-v1">
                            <img src="{{ asset('frontend/assets/images/v1/shape3.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sofax-default-content mr-80 tac fs-19">
                        <div class="tg-heading-subheading animation-style3">
                            <h2>Use sales insights to drive your strategy</h2>
                        </div>
                        <p>These are just a few examp & the best choice for you will depend on the factors such as your
                            budget your team & the specific features you need.</p>
                        <div class="extra-mt">
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('frontend/assets/images/v1/icon9.png') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2">
                                    <h4>Time saved in closing deals</h4>
                                    <p>You'll save time managing and closing deals by having a centralized hub for all
                                        your sales activities.</p>
                                </div>
                            </div>
                            <div class="sofax-iconbox-wrap2">
                                <div class="sofax-iconbox-icon2">
                                    <img src="{{ asset('frontend/assets/images/v1/icon4.png') }}" alt="">
                                </div>
                                <div class="sofax-iconbox-data2">
                                    <h4>Quick access of data & communication</h4>
                                    <p>Quickly access all the information you need to close deals. Have contact details
                                        for each prospect in one place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="extra-mt wow fadeInUpX">
                            <a class='sofax-default-btn pill' data-text='Get started' href='contact-us.html'>
                                <span class="button-wraper">Get started</span>
                            </a>
                        </div>
                        <div class="sofax-content-shape-v1">
                            <img src="{{ asset('frontend/assets/images/v1/shape3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content1 section -->
    <section class="section sofax-section-padding bg-light">
        <div class="container">
            <div class="sofax-section-title center pb-50">
                <div class="tg-heading-subheading animation-style3">
                    <h2>Discover the right price plan for you</h2>
                </div>
            </div>
            <div class="pricing-btn">
                <label>Per Month</label>
                <div class="toggle-btn">
                    <input class="form-check-input btn-toggle price-deck-trigger" type="checkbox"
                        id="flexSwitchCheckDefault" data-pricing-trigger="" data-target="#table-price-value"
                        checked="">
                </div>
                <label>Per Year</label>
            </div>
            <div class="row" id="table-price-value" data-pricing-dynamic="" data-value-active="monthly">
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-pricing-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-pricing-header">
                            <img src="{{ asset('frontend/assets/images/v1/icon7.png') }}" alt="">
                            <h4>Essential</h4>
                        </div>
                        <div class="sofax-pricing-price">
                            <h2>$</h2>
                            <div class="sofax-price-value dynamic-value" data-active="19" data-monthly="19"
                                data-yearly="39"></div>
                            <p class="dynamic-value" data-active="/Per Month" data-monthly="/Per Month"
                                data-yearly="/Per Yearly"></p>
                        </div>
                        <div class="sofax-pricing-body">
                            <h5>Key features:</h5>
                            <ul>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Lead,
                                    deal, contact, calendar
                                    and pipeline management</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Seamless
                                    data import and 400+
                                    integrations</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">24/7,
                                    multi-language support
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-pricing-footer">
                            <a class='sofax-default-btn outline-btn d-block pill' href='contact-us.html'>Purchase
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-pricing-wrap wow fadeInUpX active" data-wow-delay="0.1s">
                        <div class="sofax-pricing-header">
                            <img src="{{ asset('frontend/assets/images/v1/icon5.png') }}" alt="">
                            <h4>Professional</h4>
                        </div>
                        <div class="sofax-pricing-price">
                            <h2>$</h2>
                            <div class="sofax-price-value dynamic-value" data-active="49" data-monthly="49"
                                data-yearly="69"></div>
                            <p class="dynamic-value" data-active="/Per Month" data-monthly="/Per Month"
                                data-yearly="/Per Yearly"></p>
                        </div>
                        <div class="sofax-pricing-body">
                            <h5>Key features:</h5>
                            <ul>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Full
                                    email sync with
                                    templates, open, click tracking & emailing</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}"
                                        alt="">Automations builder,
                                    including email sequences</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Meeting,
                                    email and video call
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-pricing-footer">
                            <a class='sofax-default-btn d-block pill btn-hover' href='contact-us.html'>Purchase
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="sofax-pricing-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="sofax-pricing-header">
                            <img src="{{ asset('frontend/assets/images/v1/icon6.png') }}" alt="">
                            <h4>Enterprise</h4>
                        </div>
                        <div class="sofax-pricing-price">
                            <h2>$</h2>
                            <div class="sofax-price-value dynamic-value" data-active="129" data-monthly="129"
                                data-yearly="199"></div>
                            <p class="dynamic-value" data-active="/Per Month" data-monthly="/Per Month"
                                data-yearly="/Per Yearly"></p>
                        </div>
                        <div class="sofax-pricing-body">
                            <h5>Key features:</h5>
                            <ul>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}"
                                        alt="">Streamlined lead routing and
                                    account access control</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Document
                                    and contract
                                    management with e-signatures</li>
                                <li><img src="{{ asset('frontend/assets/images/v1/icon8.png') }}" alt="">Revenue
                                    forecasts & reporting
                                </li>
                            </ul>
                        </div>
                        <div class="sofax-pricing-footer">
                            <a class='sofax-default-btn outline-btn d-block pill' href='contact-us.html'>Purchase
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing section -->
    <section class="sofax-section-padding2 dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="integration-social-icon wow fadeInUpX">
                        <img src="{{ asset('frontend/assets/images/v1/icon10.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sofax-default-content tac light-color">
                        <div class="tg-heading-subheading animation-style3">
                            <h2>Integrate your tech stack & many tools</h2>
                        </div>
                        <p>Integrating with the apps that drive your business. Seamlessly connect with your favorite or
                            new tools with tailored recommendations.</p>
                        <div class="extra-mt wow fadeInUpX">
                            <a class='sofax-default-btn pill' data-text='View all integrations' href='contact-us.html'>
                                <span class="button-wraper">View all integrations </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end integration section -->
    <section class="sofax-section-padding2">
        <div class="container">
            <div class="sofax-section-title center">
                <div class="tg-heading-subheading animation-style3">
                    <h2>See what our users have to say about it</h2>
                </div>
            </div>
        </div>
        <div class="sofax-testimonial-slider">
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>I am a would need more details to a provide relevant informatio business clients' reviews are
                        feedback from in a individuals or companies.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member2.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Wellim Selith </h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>It’s an all-in-one solution to that the has turbocharged the growth. The lead generation &
                        capbilities. our partner & result spesk.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member3.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Semits Johan</h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>I am a would need more details to a provide relevant informatio business clients' reviews are
                        feedback from in a individuals or companies.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member2.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Wellim Selith </h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sofax-testimonial-slider-2">
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>I am a would need more details to a provide relevant informatio business clients' reviews are
                        feedback from in a individuals or companies.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member2.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Wellim Selith </h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>It’s an all-in-one solution to that the has turbocharged the growth. The lead generation &
                        capbilities. our partner & result spesk.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member3.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Semits Johan</h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>I am a would need more details to a provide relevant informatio business clients' reviews are
                        feedback from in a individuals or companies.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member2.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Wellim Selith </h5>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="sofax-testimonial-content">
                <div class="sofax-testimonial-rating">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/v1/rattingful.svg') }}" alt="">
                        </li>
                    </ul>
                </div>
                <div class="sofax-testimonial-data">
                    <p>Great results enjoyable to the works with & most importanly enabled us to the presence on the
                        website needed conduct business.</p>
                </div>
                <div class="sofax-testimonial-author">
                    <div class="sofax-testimonial-author-thumb">
                        <img src="{{ asset('frontend/assets/images/v1/member1.png') }}" alt="">
                    </div>
                    <div class="sofax-testimonial-author-data">
                        <h5>Derrick Turner</h5>
                        <p>Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial section -->
    <section class="sofax-section-padding2 bg-light">
        <div class="container">
            <div class="sofax-cta-content">
                <div class="tg-heading-subheading animation-style3">
                    <h2>Driving business growth with a new experience</h2>
                </div>
                <p>Start tracking your sales pipeline, manage leads, and automate your entire sales process in one place
                    so you can easily focus on selling.</p>
                <div class="extra-mt wow fadeInUpX">
                    <a class='sofax-default-btn pill' data-text='Create a free account' href='sign-up.html'>
                        <span class="button-wraper">Create a free account</span>
                    </a>
                    <span class="cta-bottom">Full access. No credit card needed.</span>
                </div>
                <div class="sofax-cta-shape">
                    <img src="{{ asset('frontend/assets/images/v1/shape4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end cta section -->
@endsection

@push('css')
    <!-- 可以添加自定义样式 -->
    <style>
        #heroCarousel {
            width: 100%;
            height: 250px;
            position: relative;
        }

        #heroCarousel .carousel-item {
            height: 250px;
        }

        #heroCarousel .carousel-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* 响应式高度设置 */
        @media (min-width: 992px) {

            /* lg 断点 */
            #heroCarousel,
            #heroCarousel .carousel-item,
            #heroCarousel .carousel-item img {
                height: 350px;
            }
        }

        @media (min-width: 1200px) {

            /* xl 断点 */
            #heroCarousel,
            #heroCarousel .carousel-item,
            #heroCarousel .carousel-item img {
                height: 350px;
            }
        }

        .carousel-caption {
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
        }

        /* Font Awesome 箭头样式 */
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            opacity: 0.8;
            z-index: 5;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            color: #fff;
            text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
        }

        /* 悬停效果 */
        .carousel-control-prev:hover i,
        .carousel-control-next:hover i {
            color: #fff;
            opacity: 1;
        }

        /* 移动端设置 */
        @media (max-width: 991px) {

            #heroCarousel,
            #heroCarousel .carousel-item,
            #heroCarousel .carousel-item img {
                height: 250px;
            }
        }
    </style>
@endpush
