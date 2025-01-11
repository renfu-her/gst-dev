@extends('frontend.layouts.app')

@section('content')
    <div class="sofax-breadcrumb" style="background-image: url({{ asset('frontend/assets/images/service/privacy.webp') }})">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="post__title">隱私權政策</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page">隱私權政策</li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="sofax-section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        {!! Str::markdown($postPrivacy->content) !!}
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

        .post__title {
            color: #333;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
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
            color: #666;
            font-size: 16px;
        }

        .breadcrumbs a {
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumbs a:hover {
            color: #007bff;
        }

        .breadcrumbs img {
            width: 16px;
            height: 16px;
        }

        .privacy-content {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        .privacy-content h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .privacy-content p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
        }
    </style>
@endpush
