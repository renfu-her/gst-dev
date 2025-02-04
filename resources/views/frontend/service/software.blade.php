@extends('frontend.layouts.app')

@section('content')
    <div class="sofax-breadcrumb"
        style="background-image: url({{ asset('frontend/assets/images/service/software-service-01.webp') }})">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="post__title">軟體銷售</h1>
            <nav class="breadcrumbs">
                {{-- <ul>
                    <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page">軟體銷售</li>
                </ul> --}}
            </nav>
        </div>
    </div>
    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-section-title">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sofax-aboutus-section-title text-center mb-5">
                            <h2>專業軟體銷售方案</h2>
                            <p class="mt-3">提供企業全方位的軟體採購與授權服務</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務內容</h3>
                        <ul class="service-list">
                            <li>企業軟體授權銷售</li>
                            <li>軟體升級與更新</li>
                            <li>授權管理與諮詢</li>
                            <li>軟體安裝與設定</li>
                            <li>技術支援服務</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務優勢</h3>
                        <ul class="service-list">
                            <li>正版軟體保證</li>
                            <li>優惠的採購方案</li>
                            <li>完整的售後服務</li>
                            <li>專業技術支援</li>
                            <li>彈性授權方案</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-image-block text-center">
                        <img src="{{ asset('frontend/assets/images/service/software-service-02.webp') }}" alt="軟體銷售"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
        .sofax-breadcrumb {
            position: relative;
            background-size: cover;
            background-position: center;
            margin-top: 90px;
            padding-bottom: 200px;
        }

        .sofax-breadcrumb .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .sofax-breadcrumb .container {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .post__title {
            color: #fff;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .breadcrumbs {
            display: flex;
            justify-content: center;
        }

        .breadcrumbs ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .breadcrumbs li {
            color: #fff;
            font-size: 16px;
        }

        .breadcrumbs a {
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumbs a:hover {
            opacity: 0.8;
        }

        .breadcrumbs img {
            width: 16px;
            height: 16px;
            filter: brightness(0) invert(1);
        }

        .service-content-block {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .service-content-block h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            padding: 10px 0;
            padding-left: 25px;
            position: relative;
            font-size: 16px;
            line-height: 1.6;
        }

        .service-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #007bff;
        }

        .service-image-block {
            margin-top: 40px;
        }

        .service-image-block img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush
