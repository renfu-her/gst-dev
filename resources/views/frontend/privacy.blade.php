@extends('frontend.layouts.app')

@section('content')
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">隱私權政策</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href='{{ route('home') }}'>首頁</a></li>
                    <li><img src="{{ asset('frontend/assets/images/about/arrow.png') }}" alt=""></li>
                    <li aria-current="page"> 隱私權政策</li>
                </ul>
            </nav>

        </div>
    </div>
    <section class="sofax-section-padding5">
        <div class="container">
            <div class="sofax-section-title">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sofax-aboutus-section-title">
                            <h2>Our brand’s story an exciting journey</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-end">
                        <div class="sofax-aboutus-content-text">
                            <p>Their journey was not without its challenges. They are faced countless to late nights
                                brainstorming strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sofax-aboutus-thumb wow fadeInUpX">
                <img src="{{ asset('frontend/assets/images/about/aboutthumb.png') }}" alt="">
                <a class="sofax-popup-video3 video-init" href="https://www.youtube.com/watch?v=zE_WFiHnSlY">
                    <img src="{{ asset('frontend/assets/images/v5/icon7.png') }}" alt="">
                </a>
                <div class="play-btn2">
                    <a class=" video-init" href="https://www.youtube.com/watch?v=zE_WFiHnSlY"><img
                            src="{{ asset('frontend/assets/images/v5/icon6.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
@endsection
