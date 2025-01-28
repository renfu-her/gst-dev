@extends('frontend.layouts.app')

@section('title', $postMenu->meta_title)
@section('description', $postMenu->meta_description)
@section('keywords', $postMenu->meta_keywords)

@section('content')
    <div class="sofax-breadcrumb" style="background-image: url({{ $postMenu->image_url }})">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="post__title">{{ $postMenu->title }}</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page">{{ $postMenu->title }}</li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="sofax-section-padding5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-block">
                        {!! $postMenu->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <style>
        .content-block {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        .content-block h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .content-block h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: bold;
        }

        .content-block p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 15px;
            color: #666;
        }

        .content-block img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 20px 0;
        }

        .content-block ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .content-block ul li {
            padding: 10px 0;
            padding-left: 25px;
            position: relative;
            font-size: 16px;
            line-height: 1.6;
        }

        .content-block ul li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #007bff;
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

        /* 響應式設計 */
        @media (max-width: 768px) {
            .sofax-breadcrumb {
                padding-bottom: 150px;
            }

            .post__title {
                font-size: 28px;
            }

            .content-block {
                padding: 20px;
            }

            .content-block h2 {
                font-size: 24px;
            }

            .content-block h3 {
                font-size: 20px;
            }
        }
    </style>
@endpush
