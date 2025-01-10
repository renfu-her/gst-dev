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
