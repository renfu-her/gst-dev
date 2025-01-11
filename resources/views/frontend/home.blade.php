@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Carousel -->
    <div class="sofax-slider-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- 指示器 -->
            <div class="carousel-indicators">
                @foreach ($homeAds as $key => $ad)
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $key + 1 }}">
                    </button>
                @endforeach
            </div>

            <!-- 轮播内容 -->
            <div class="carousel-inner">
                @foreach ($homeAds as $key => $ad)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="carousel-overlay"></div>
                        <img src="{{ $ad->image_path }}" class="d-block w-100 h-100 object-fit-cover"
                            alt="{{ $ad->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <div>
                                <h2 class="display-5 fw-bold">{{ $ad->title }}</h2>
                                <p class="fs-4">{{ $ad->description }}</p>
                                @if ($ad->link)
                                    <a href="{{ $ad->link }}" class="btn btn-primary btn-lg">了解更多</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
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
            <div class="sofax-section-title text-center">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="tg-heading-subheading animation-style3">
                            <h2>專業資訊服務整合方案</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-md-6">
                        <div class="sofax-iconbox-wrap wow fadeInUpX" data-wow-delay="0.{{ $loop->iteration }}s">
                            <div class="sofax-iconbox-icon">
                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="service-icon">
                            </div>
                            <div class="sofax-iconbox-data">
                                <h4 class="service-title">{{ $post->title }}</h4>
                                <p class="service-content">{{ $post->content }}</p>
                                <a class='sofax-icon-btn' href='#'>
                                    更多詳情
                                    <img src="{{ asset('frontend/assets/images/v1/arrow-right.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
            width: 100%;
            left: 0;
            right: 0;
        }

        .caption-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            /* 半透明黑色背景 */
            padding: 30px;
            border-radius: 8px;
            max-width: 800px;
            margin: 0 auto;
        }

        .carousel-caption h2 {
            color: #fff;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .carousel-caption p {
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .carousel-caption .btn {
            text-shadow: none;
            padding: 10px 30px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        .carousel-caption .btn:hover {
            background-color: #fff;
            color: #000;
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

        .sofax-iconbox-wrap {
            height: 100%;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        .sofax-iconbox-icon {
            margin-bottom: 30px;
        }

        .sofax-iconbox-icon img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .sofax-iconbox-data {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .service-title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .service-content {
            flex-grow: 1;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .sofax-icon-btn {
            margin-top: auto;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        /* 確保每行的卡片高度一致 */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-xl-4 {
            margin-bottom: 30px;
        }

        .carousel-item {
            position: relative;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            /* 整體半透明遮罩 */
            z-index: 1;
        }

        .carousel-caption {
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
            width: 100%;
            left: 0;
            right: 0;
        }

        .carousel-caption h2 {
            color: #fff;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .carousel-caption p {
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .carousel-caption .btn {
            text-shadow: none;
            padding: 10px 30px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        .carousel-caption .btn:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
@endpush
