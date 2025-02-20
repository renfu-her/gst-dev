@extends('frontend.layouts.app')

@section('content')
    <div class="sofax-breadcrumb"
        style="background-image: url({{ asset('frontend/assets/images/service/erp-service-01.webp') }})">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="post__title">ERP導入服務</h1>
            <nav class="breadcrumbs">
                <ul>
                    {{-- <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page">ERP導入服務</li> --}}
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
                            <h2>全方位ERP系統整合方案</h2>
                            <p class="mt-3">協助企業建立高效率的營運管理系統</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務內容</h3>
                        <ul class="service-list">
                            <li>需求分析與系統規劃</li>
                            <li>系統建置與客製化開發</li>
                            <li>資料轉換與系統整合</li>
                            <li>使用者培訓與技術支援</li>
                            <li>系統維護與升級服務</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content-block">
                        <h3>服務優勢</h3>
                        <ul class="service-list">
                            <li>豐富的導入經驗</li>
                            <li>專業的顧問團隊</li>
                            <li>完整的培訓計劃</li>
                            <li>持續的技術支援</li>
                            <li>彈性的客製化服務</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="service-image-block text-center">
                        <img src="{{ asset('frontend/assets/images/service/erp-service-02.webp') }}" alt="ERP服務"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
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
    </style>
@endpush
