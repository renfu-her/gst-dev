@extends('frontend.layouts.app')

@section('content')
    <div class="sofax-breadcrumb"
        style="background-image: url({{ asset('frontend/assets/images/service/server_service_01.webp') }})">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="post__title">機房規劃建置</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page">機房規劃建置</li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-section-title">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sofax-aboutus-section-title text-center mb-5">
                            <h2>專業機房規劃建置方案</h2>
                            <p class="mt-3">為企業打造安全穩定的資訊機房環境</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務內容</h3>
                        <ul class="service-list">
                            <li>機房環境評估規劃</li>
                            <li>空調消防系統建置</li>
                            <li>網路架構規劃設計</li>
                            <li>不斷電系統規劃</li>
                            <li>監控預警系統建置</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務優勢</h3>
                        <ul class="service-list">
                            <li>專業規劃團隊</li>
                            <li>完整施工管理</li>
                            <li>高規格安全標準</li>
                            <li>即時維護支援</li>
                            <li>節能環保設計</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-image-block text-center">
                        <img src="{{ asset('frontend/assets/images/service/server-service-02.webp') }}" alt="機房規劃建置"
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

        /* ... 其他樣式與 ERP 相同 ... */

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
