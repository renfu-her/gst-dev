@extends('frontend.layouts.app')

@section('content')
    <!--...::: Hero Section Start :::... -->
    <section class="section-hero">
        <!-- Section Space -->
        <div class="pt-24 md:pt-32 lg:pt-40 xl:pt-52">
            <!-- Section Container -->
            <div class="container">
                <div class="relative">
                    <!-- Hero Area -->
                    <div class="mx-auto max-w-5xl">
                        <!-- Hero Content -->
                        <div class="text-center">
                            <h1 class="mb-6">Best platform to manage your sales</h1>
                            <p>
                                The best platform for you will depend on factors such as
                                your business size, budget, integration needs and specific
                                sales processes. Offering visual pipeline management sales
                                reporting & email interaction.
                            </p>
                            <!-- Subscription Form -->
                            <form action="#" method="post" class="mx-auto mt-[50px] max-w-[600px]">
                                <div class="relative">
                                    <input type="email" placeholder="Enter your email "
                                        class="w-full rounded-[50px] border border-colorGreyDark px-5 py-4 pr-60 text-lg focus-visible:outline-none"
                                        required="">
                                    <button type="submit"
                                        class="btn btn-primary right-1 top-1/2 mt-6 sm:absolute sm:mt-0 sm:-translate-y-1/2">
                                        <span>Start a 14 days free trail</span>
                                        <span>Start a 14 days free trail</span>
                                    </button>
                                </div>
                            </form>
                            <!-- Subscription Form -->
                            <div class="mt-4">
                                <div class="inline-flex gap-x-1 text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                                4.8/5 rating software trusted by users
                            </div>
                        </div>
                        <!-- Hero Content -->
                    </div>
                    <!-- Hero Area -->
                    <img src="{{ asset('frontend/assets/img/abstracts/hero-1-element-1.svg') }}" alt="hero-1-element-1"
                        width="291" height="200" class="jos absolute bottom-0 hidden xxl:inline-block"
                        data-jos_animation="zoom-in">
                </div>
                <div class="relative mt-10 md:mt-[60px] lg:mt-20">
                    <img src="{{ asset('frontend/assets/img/images/home-1/hero-dashboard.jpg') }}" alt="hero-dashboard"
                        width="1304" height="690" class="max-w-full">
                    <img src="{{ asset('frontend/assets/img/abstracts/hero-1-element-2.svg') }}" alt="hero-1-element-2"
                        width="311" height="243" class="jos absolute -right-44 -top-20 hidden xxxl:inline-block"
                        data-jos_animation="zoom-in">
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!--...::: Hero Section End :::... -->

    <!--...::: Client Section Start :::... -->
    <div class="section-client">
        <!-- Section Space -->
        <div class="py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container">
                <div class="mx-auto mb-[60px] max-w-2xl text-center">
                    <p>Trusted by 1600+ of the world's most popular companies</p>
                </div>

                <!-- Brand Slider -->
                <div class="client-slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-1.png') }}" alt="client-img-1"
                                width="199" height="48">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-2.png') }}" alt="client-img-2"
                                width="199" height="49">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-3.png') }}" alt="client-img-3"
                                width="201" height="48">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-4.png') }}" alt="client-img-4"
                                width="189" height="40">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-5.png') }}" alt="client-img-5"
                                width="196" height="48">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-1.png') }}" alt="client-img-1"
                                width="199" height="48">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-2.png') }}" alt="client-img-2"
                                width="199" height="49">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-3.png') }}" alt="client-img-3"
                                width="201" height="48">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-4.png') }}" alt="client-img-4"
                                width="189" height="40">
                        </div>
                        <div class="swiper-slide flex justify-center">
                            <img src="{{ asset('frontend/assets/img/images/home-1/client-img-5.png') }}" alt="client-img-5"
                                width="196" height="48">
                        </div>
                    </div>
                </div>
                <!-- Brand Slider -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!--...::: Client Section End :::... -->

    <!--...::: Service Section Start :::... -->
    <section class="section-service">
        <!-- Section Background -->
        <div class="bg-colorGrey">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container">
                    <!-- Section Content Block -->
                    <div class="mb-20 flex flex-wrap items-center justify-between gap-10">
                        <div class="max-w-3xl">
                            <h2 class="jos">
                                Solution to organize your sales in one place
                            </h2>
                        </div>
                        <a class='jos btn btn-primary' href='services.html'>
                            <span>View all services</span>
                            <span>View all services</span>
                        </a>
                    </div>
                    <!-- Section Content Block -->

                    <!-- Service List -->
                    <ul class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Items -->
                        <li class="jos" data-jos_animation="flip-left">
                            <a class='group block h-full rounded-[10px] bg-white p-[30px] hover:shadow-custom-1'
                                href='services.html'>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon-1.svg') }}"
                                    alt="service-icon-1" width="80" height="80">
                                <div class="display-heading display-heading-4 mb-4 mt-[30px]">
                                    Workflow Automation
                                </div>
                                <p class="mb-[30px]">
                                    Repetitive a tasks & workflows, such as email
                                    communications, follow-up, & data entry, freeing up
                                    sales.
                                </p>

                                <div class="inline-block">
                                    <span class="transition-default font-normal group-hover:font-semibold">
                                        More details
                                    </span>
                                    <div class="relative inline-flex items-center justify-center overflow-hidden">
                                        <span class="transition-default translate-x-0 group-hover:translate-x-full">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                        <span
                                            class="transition-default absolute -translate-x-full group-hover:translate-x-0">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Service Items -->
                        <!-- Service Items -->
                        <li class="jos" data-jos_animation="flip-left">
                            <a class='group block h-full rounded-[10px] bg-white p-[30px] hover:shadow-custom-1'
                                href='services.html'>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon-2.svg') }}"
                                    alt="service-icon-2" width="80" height="80">
                                <div class="display-heading display-heading-4 mb-4 mt-[30px]">
                                    Lead Management
                                </div>
                                <p class="mb-[30px]">
                                    Tracking, qualifying and nurturing to customers or leads
                                    throughout their journey in the sales pipeline.
                                </p>

                                <div class="inline-block">
                                    <span class="transition-default font-normal group-hover:font-semibold">
                                        More details
                                    </span>
                                    <div class="relative inline-flex items-center justify-center overflow-hidden">
                                        <span class="transition-default translate-x-0 group-hover:translate-x-full">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                        <span
                                            class="transition-default absolute -translate-x-full group-hover:translate-x-0">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Service Items -->
                        <!-- Service Items -->
                        <li class="jos" data-jos_animation="flip-left">
                            <a class='group block h-full rounded-[10px] bg-white p-[30px] hover:shadow-custom-1'
                                href='services.html'>
                                <img src="{{ asset('frontend/assets/img/icons/service-icon-3.svg') }}"
                                    alt="service-icon-3" width="80" height="80">
                                <div class="display-heading display-heading-4 mb-4 mt-[30px]">
                                    Sales Forecasting
                                </div>
                                <p class="mb-[30px]">
                                    Analyzing past sales data, including sales volume,
                                    revenue customers to demographics & seasonality.
                                </p>

                                <div class="inline-block">
                                    <span class="transition-default font-normal group-hover:font-semibold">
                                        More details
                                    </span>
                                    <div class="relative inline-flex items-center justify-center overflow-hidden">
                                        <span class="transition-default translate-x-0 group-hover:translate-x-full">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                        <span
                                            class="transition-default absolute -translate-x-full group-hover:translate-x-0">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Service Items -->
                    </ul>
                    <!-- Service List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!--...::: Service Section End :::... -->

    <!--...::: Content Section Start :::... -->
    <section class="section-content">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container">
                <div class="grid grid-cols-1 gap-y-20 lg:gap-y-[100px] xl:gap-y-[130px]">
                    <!-- Content Area -->
                    <div
                        class="grid grid-cols-1 items-center gap-10 md:gap-[60px] lg:grid-cols-2 xl:grid-cols-[minmax(0,0.75fr)_1fr] xl:gap-20 xxl:gap-28">
                        <div class="jos relative z-10 order-2 mx-auto inline-flex max-w-[500px] items-center justify-center lg:order-1"
                            data-jos_animation="fade-right">
                            <img src="{{ asset('frontend/assets/img/images/home-1/content-img-1.jpg') }}"
                                alt="content-img-1" width="458" height="558"
                                class="absolute h-[calc(100%-50px)] w-[calc(100%-50px)]">
                            <img src="{{ asset('frontend/assets/img/images/home-1/content-img-shape.jpg') }}"
                                alt="content-img-1" width="500" height="614">
                        </div>
                        <div class="order-1 lg:order-2">
                            <!-- Section Block -->
                            <div class="mb-[50px]">
                                <h2 class="jos">
                                    Optimize your sales without any hassle
                                </h2>
                                <p class="jos mt-5">
                                    Sales forecasting, & analytics that enable users to
                                    streamline their sales workflows, identify areas for
                                    improvement and also make data-driven.
                                </p>
                            </div>
                            <!-- Section Block -->
                            <!-- Content List -->
                            <ul class="flex max-w-[560px] flex-col gap-y-6">
                                <li class="jos">
                                    <div class="display-heading display-heading-4 mb-4">
                                        <span
                                            class="inline-block translate-y-0.5 pr-3 text-3xl font-normal text-colorGreen"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Utilize customer data
                                    </div>
                                    <p class="pl-12">
                                        Use this data to understand your customers preferences
                                        behaviors and pain the points,tailor your sales
                                        pitches.
                                    </p>
                                </li>
                                <li class="jos">
                                    <div class="display-heading display-heading-4 mb-4">
                                        <span
                                            class="inline-block translate-y-0.5 pr-3 text-3xl font-normal text-colorGreen"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Streamline processes
                                    </div>
                                    <p class="pl-12">
                                        Automate repetitive tasks such as lead nurturing,
                                        follow-ups and order to the processing with using
                                        salesphere.
                                    </p>
                                </li>
                                <li class="jos">
                                    <div class="display-heading display-heading-4 mb-4">
                                        <span
                                            class="inline-block translate-y-0.5 pr-3 text-3xl font-normal text-colorGreen"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Understand your audience
                                    </div>
                                    <p class="pl-12">
                                        Utilize salesphere to gather data and insights about
                                        your target audience. Their needs preferences & pain
                                        points.
                                    </p>
                                </li>
                            </ul>
                            <!-- Content List -->
                        </div>
                    </div>
                    <!-- Content Area -->

                    <!-- Content Area -->
                    <div
                        class="grid grid-cols-1 items-center gap-10 md:gap-[60px] lg:grid-cols-2 xl:grid-cols-[1fr_minmax(0,0.75fr)] xl:gap-20 xxl:gap-28">
                        <div class="jos relative z-10 order-2 mx-auto inline-flex max-w-[500px] items-center justify-center lg:order-1"
                            data-jos_animation="fade-right">
                            <img src="{{ asset('frontend/assets/img/images/home-1/content-img-2.jpg') }}"
                                alt="content-img-2" width="662" height="746"
                                class="absolute h-[calc(100%-50px)] w-[calc(100%-50px)]">
                            <img src="{{ asset('frontend/assets/img/images/home-1/content-img-shape.jpg') }}"
                                alt="content-img-1" width="500" height="614">
                            <img src="{{ asset('frontend/assets/img/abstracts/content-shape-1.svg') }}"
                                alt="content-shape-1" width="125" height="137" class="absolute right-0 top-0">
                        </div>
                        <div>
                            <!-- Section Block -->
                            <div class="mb-[50px]">
                                <h2 class="jos">
                                    Use sales insights to drive your strategy
                                </h2>
                                <p class="jos mt-5">
                                    Sales forecasting, & analytics that enable users to
                                    streamline their sales workflows, identify areas for
                                    improvement and also make data-driven.
                                </p>
                            </div>
                            <!-- Section Block -->
                            <!-- Content List -->
                            <ul class="mb-[50px] flex max-w-[560px] flex-col gap-y-6">
                                <li class="jos">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="inline-flex h-[50px] w-[50px] items-center justify-center rounded-full bg-colorGreen">
                                            <img src="{{ asset('frontend/assets/img/icons/icon-clock-white.svg') }}"
                                                alt="icon-clock-white" width="27" height="28">
                                        </div>
                                        <div class="flex-1">
                                            <div class="display-heading display-heading-4 mb-4">
                                                Time saved in closing deals
                                            </div>
                                            <p>
                                                Use this data to understand your customers
                                                preferences behaviors and pain the points,tailor
                                                your sales pitches.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="jos">
                                    <div class="flex items-start gap-4">
                                        <div
                                            class="inline-flex h-[50px] w-[50px] items-center justify-center rounded-full bg-colorGreen">
                                            <img src="{{ asset('frontend/assets/img/icons/icon-cursor-click-white.svg') }}"
                                                alt="icon-cursor-click-white" width="27" height="28">
                                        </div>
                                        <div class="flex-1">
                                            <div class="display-heading display-heading-4 mb-4">
                                                Quick access of data & communication
                                            </div>
                                            <p>
                                                Quickly access all the information you need to
                                                close deals. Have contact details for each
                                                prospect in one place.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Content List -->
                            <a class='jos btn btn-primary' href='index.htm'>
                                <span>Get started</span>
                                <span>Get started</span>
                            </a>
                        </div>
                    </div>
                    <!-- Content Area -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!--...::: Content Section End :::... -->

    <!--...::: Pricing Section Start :::... -->
    <section class="section-pricing">
        <!-- Section Background -->
        <div class="bg-colorGrey">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container">
                    <!-- Section Block -->
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="jos">Discover the right price plan for you</h2>
                    </div>
                    <!-- Section Block -->
                    <!-- Pricing Area -->
                    <div>
                        <!-- Pricing Button Block -->
                        <div class="my-[50px] flex flex-row items-center justify-center gap-6">
                            <span class="font-bold">Per Month</span>

                            <!-- Toggle Button -->
                            <label for="toggle" class="flex cursor-pointer items-center">
                                <!-- toggle -->
                                <span class="relative inline-block h-[35px] w-[70px] rounded-[35px] bg-colorPurpleLight">
                                    <!-- hidden input -->
                                    <input id="toggle" type="checkbox" class="peer hidden" onclick="toggleSwitch()">
                                    <!-- dot -->
                                    <span
                                        class="toggle_dot absolute left-[5px] top-1/2 h-[25px] w-[25px] -translate-y-1/2 rounded-full bg-black transition-all duration-300 peer-checked:translate-x-[33px]"></span>
                                </span>
                            </label>
                            <!-- Toggle Button -->
                            <span class="font-bold">Per Year</span>
                        </div>
                        <!-- Pricing Button Block -->
                        <!-- Pricing List -->
                        <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                            <!-- Pricing Item -->
                            <li class="jos rounded-[10px] p-10 shadow-custom-1" data-jos_animation="flip-left">
                                <!-- Pricing Top -->
                                <img src="{{ asset('frontend/assets/img/icons/pricing-icon-1.svg') }}"
                                    alt="pricing-icon-1" width="47" height="60" class="mb-5">
                                <div class="display-heading display-heading-4 md-4">
                                    Essential
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <span class="month display-heading display-heading-2">$19
                                            <span class="text-xl font-normal tracking-normal text-colorTextBody">/Per
                                                Month</span>
                                        </span>
                                        <span class="annual display-heading display-heading-2 hidden">$220
                                            <span
                                                class="text-xl font-normal tracking-normal text-colorTextBody">/Yearly</span></span>
                                    </div>
                                </div>
                                <!-- Pricing Top -->
                                <!-- Separator -->
                                <div class="my-6 h-px w-full bg-[#EAEDF0]"></div>
                                <!-- Separator -->
                                <!-- Pricing Info -->
                                <div class="mb-5 text-lg font-bold text-colorTextTitle">
                                    Key features:
                                </div>
                                <ul class="mb-10 flex flex-col gap-y-4 font-semibold text-colorTextTitle">
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Lead, deal, contact, calendar and pipeline management
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Seamless data import and 400+ integrations
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        24/7, multi-language support
                                    </li>
                                </ul>
                                <!-- Pricing Info -->
                                <button class="btn btn-outline-black w-full">
                                    <span>Purchase now </span>
                                    <span>Purchase now </span>
                                </button>
                            </li>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <li class="jos rounded-[10px] p-10 shadow-custom-1" data-jos_animation="flip-left">
                                <!-- Pricing Top -->
                                <img src="{{ asset('frontend/assets/img/icons/pricing-icon-2.svg') }}"
                                    alt="pricing-icon-2" width="107" height="60" class="mb-5">
                                <div class="display-heading display-heading-4 md-4">
                                    Essential
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <span class="month display-heading display-heading-2">$49
                                            <span class="text-xl font-normal tracking-normal text-colorTextBody">/Per
                                                Month</span>
                                        </span>
                                        <span class="annual display-heading display-heading-2 hidden">$550
                                            <span
                                                class="text-xl font-normal tracking-normal text-colorTextBody">/Yearly</span></span>
                                    </div>
                                </div>
                                <!-- Pricing Top -->
                                <!-- Separator -->
                                <div class="my-6 h-px w-full bg-[#EAEDF0]"></div>
                                <!-- Separator -->
                                <!-- Pricing Info -->
                                <div class="mb-5 text-lg font-bold text-colorTextTitle">
                                    Key features:
                                </div>
                                <ul class="mb-10 flex flex-col gap-y-4 font-semibold text-colorTextTitle">
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Lead, deal, contact, calendar and pipeline management
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Seamless data import and 400+ integrations
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        24/7, multi-language support
                                    </li>
                                </ul>
                                <!-- Pricing Info -->
                                <button class="btn btn-primary w-full">
                                    <span>Purchase now</span>
                                    <span>Purchase now</span>
                                </button>
                            </li>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <li class="jos rounded-[10px] p-10 shadow-custom-1" data-jos_animation="flip-left">
                                <!-- Pricing Top -->
                                <img src="{{ asset('frontend/assets/img/icons/pricing-icon-3.svg') }}"
                                    alt="pricing-icon-3" width="65" height="62" class="mb-5">
                                <div class="display-heading display-heading-4 md-4">
                                    Essential
                                </div>
                                <div class="mt-4">
                                    <div>
                                        <span class="month display-heading display-heading-2">$129
                                            <span class="text-xl font-normal tracking-normal text-colorTextBody">/Per
                                                Month</span>
                                        </span>
                                        <span class="annual display-heading display-heading-2 hidden">$1500
                                            <span
                                                class="text-xl font-normal tracking-normal text-colorTextBody">/Yearly</span></span>
                                    </div>
                                </div>
                                <!-- Pricing Top -->
                                <!-- Separator -->
                                <div class="my-6 h-px w-full bg-[#EAEDF0]"></div>
                                <!-- Separator -->
                                <!-- Pricing Info -->
                                <div class="mb-5 text-lg font-bold text-colorTextTitle">
                                    Key features:
                                </div>
                                <ul class="mb-10 flex flex-col gap-y-4 font-semibold text-colorTextTitle">
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Lead, deal, contact, calendar and pipeline management
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        Seamless data import and 400+ integrations
                                    </li>
                                    <li>
                                        <span class="pr-1 text-2xl font-normal"><i
                                                class="ri-checkbox-circle-fill"></i></span>
                                        24/7, multi-language support
                                    </li>
                                </ul>
                                <!-- Pricing Info -->
                                <button class="btn btn-outline-black w-full">
                                    <span>Purchase now</span>
                                    <span>Purchase now</span>
                                </button>
                            </li>
                            <!-- Pricing Item -->
                        </ul>
                        <!-- Pricing List -->
                    </div>
                    <!-- Pricing Area -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!--...::: Pricing Section End :::... -->

    <!--...::: Integration Section Start :::... -->
    <section class="section-integration">
        <!-- Section Background -->
        <div class="bg-black">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container">
                    <!-- Integration Area -->
                    <div class="grid grid-cols-1 items-center gap-20 xl:grid-cols-2 xxl:flex xxl:justify-between">
                        <div class="order-2 mx-auto grid max-w-[453px] grid-cols-1 justify-center gap-7 xl:order-1">
                            <!-- Integration Icon List -->
                            <ul class="flex flex-wrap justify-center gap-7">
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-slack.svg') }}"
                                        alt="icon-colorful-slack" width="53" height="53">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-tagged.svg') }}"
                                        alt="icon-colorful-tagged" width="44" height="49">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-dropbox.svg') }}"
                                        alt="icon-colorful-dropbox" width="51" height="43">
                                </li>
                                <!-- Integration Icon Items -->
                            </ul>
                            <!-- Integration Icon List -->
                            <!-- Integration Icon List -->
                            <ul class="flex flex-wrap justify-center gap-7">
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-pinterest.svg') }}"
                                        alt="icon-colorful-pinterest" width="53" height="52">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-hubspot.svg') }}"
                                        alt="icon-colorful-hubspot" width="50" height="53">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-leadpage.svg') }}"
                                        alt="icon-colorful-leadpage" width="52" height="40">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-gdrive.svg') }}"
                                        alt="icon-colorful-gdrive" width="52" height="47">
                                </li>
                                <!-- Integration Icon Items -->
                            </ul>
                            <!-- Integration Icon List -->
                            <!-- Integration Icon List -->
                            <ul class="flex flex-wrap justify-center gap-7">
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-figma.svg') }}"
                                        alt="icon-colorful-figma" width="38" height="56">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-airtable.svg') }}"
                                        alt="icon-colorful-airtable" width="52" height="44">
                                </li>
                                <!-- Integration Icon Items -->
                                <!-- Integration Icon Items -->
                                <li class="jos inline-flex h-[92px] w-[92px] items-center justify-center rounded-full bg-white"
                                    data-jos_animation="zoom">
                                    <img src="{{ asset('frontend/assets/img/icons/icon-colorful-spotify.svg') }}"
                                        alt="icon-colorful-spotify" width="55" height="54">
                                </li>
                                <!-- Integration Icon Items -->
                            </ul>
                            <!-- Integration Icon List -->
                        </div>

                        <!-- Integration Content -->
                        <div class="order-1 mx-auto max-w-2xl text-white xl:order-2">
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="jos text-white">
                                    Integrate your tech stack & many tools
                                </h2>
                            </div>
                            <!-- Section Block -->
                            <p class="jos mb-[50px]">
                                Integrating with the apps that drive your business.
                                Seamlessly connect with your favorite or new tools with
                                tailored recommendations.
                            </p>
                            <a class='jos btn btn-primary' href='index.htm'>
                                <span>View all integrations</span>
                                <span>View all integrations</span>
                            </a>
                        </div>
                        <!-- Integration Content -->
                    </div>
                    <!-- Integration Area -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!--...::: Integration Section End :::... -->

    <!--...::: Testimonial Section Start :::... -->
    <section class="section-testimonial">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container">
                <!-- Section Block -->
                <div class="mx-auto mb-10 max-w-2xl text-center md:mb-[60px] lg:mb-20">
                    <h2 class="jos">See what our users have to say about it</h2>
                </div>
                <!-- Section Block -->
            </div>
            <!-- Section Container -->

            <!-- Testimonial Area -->
            <div>
                <!-- Slider main container -->
                <div class="jos testimonial-slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    Great results enjoyable to the works with & most
                                    importanly enabled us to the presence on the website
                                    needed conduct business.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="assets/img/images/home-1/testimonial-user-img-1.jpg"
                                            alt="testimonial-user-img-1" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Derrick Turner</span>
                                        <span class="text-sm">Co-Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    I am a would need more details to a provide relevant
                                    informatio business clients' reviews are feedback from
                                    in a individuals or companies.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="assets/img/images/home-1/testimonial-user-img-2.jpg"
                                            alt="testimonial-user-img-2" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Wellim Selith</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    It’s an all-in-one solution to that the has turbocharged
                                    the growth. The lead generation & capbilities. our
                                    partner & result spesk.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-3.jpg') }}"
                                            alt="testimonial-user-img-3" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Semits Johan</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    Great results enjoyable to the works with & most
                                    importanly enabled us to the presence on the website
                                    needed conduct business.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-1.jpg') }}"
                                            alt="testimonial-user-img-1" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Derrick Turner</span>
                                        <span class="text-sm">Co-Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    I am a would need more details to a provide relevant
                                    informatio business clients' reviews are feedback from
                                    in a individuals or companies.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-2.jpg') }}"
                                            alt="testimonial-user-img-2" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Wellim Selith</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    It’s an all-in-one solution to that the has turbocharged
                                    the growth. The lead generation & capbilities. our
                                    partner & result spesk.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-3.jpg') }}"
                                            alt="testimonial-user-img-3" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Semits Johan</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jos testimonial-slider-reverse swiper mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    Great results enjoyable to the works with & most
                                    importanly enabled us to the presence on the website
                                    needed conduct business.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-1.jpg') }}"
                                            alt="testimonial-user-img-1" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Derrick Turner</span>
                                        <span class="text-sm">Co-Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    I am a would need more details to a provide relevant
                                    informatio business clients' reviews are feedback from
                                    in a individuals or companies.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-2.jpg') }}"
                                            alt="testimonial-user-img-2" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Wellim Selith</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    It’s an all-in-one solution to that the has turbocharged
                                    the growth. The lead generation & capbilities. our
                                    partner & result spesk.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-3.jpg') }}"
                                            alt="testimonial-user-img-3" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Semits Johan</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    Great results enjoyable to the works with & most
                                    importanly enabled us to the presence on the website
                                    needed conduct business.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-1.jpg') }}"
                                            alt="testimonial-user-img-1" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Derrick Turner</span>
                                        <span class="text-sm">Co-Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    I am a would need more details to a provide relevant
                                    informatio business clients' reviews are feedback from
                                    in a individuals or companies.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-2.jpg') }}"
                                            alt="testimonial-user-img-2" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Wellim Selith</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="rounded-md border border-[#DBDBDB] p-9">
                                <!-- Review Star -->
                                <div class="inline-flex gap-x-1 text-2xl text-colorGreen">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <!-- Review Star -->
                                <blockquote class="my-5 text-colorTextTitle">
                                    It’s an all-in-one solution to that the has turbocharged
                                    the growth. The lead generation & capbilities. our
                                    partner & result spesk.
                                </blockquote>

                                <div class="flex items-center gap-2.5">
                                    <div class="h-14 w-14 overflow-hidden rounded-full">
                                        <img src="{{ asset('frontend/assets/img/images/home-1/testimonial-user-img-3.jpg') }}"
                                            alt="testimonial-user-img-3" width="55" height="55"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <div class="flex-1">
                                        <span class="block font-bold text-colorTextTitle">Semits Johan</span>
                                        <span class="text-sm">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Area -->
        </div>
        <!-- Section Space -->
    </section>
    <!--...::: Testimonial Section End :::... -->

    <!--...::: CTA Section Start :::... -->
    <section class="section-cta">
        <!-- Section Background -->
        <div class="bg-colorGrey">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container relative z-10">
                    <!-- Section Block -->
                    <div class="mx-auto max-w-3xl text-center">
                        <h2 class="jos">
                            Driving business growth with a new experience
                        </h2>
                        <p class="jos mt-5">
                            Start tracking your sales pipeline, manage leads, and
                            automate your entire sales process in one place so you can
                            easily focus on selling.
                        </p>
                    </div>
                    <!-- Section Block -->

                    <div class="mx-auto mt-[50px] max-w-sm text-center">
                        <a class='jos btn btn-primary' href='signup.html'>
                            <span>Create a free account</span>
                            <span>Create a free account</span>
                        </a>
                        <span class="jos mt-4 block">Full access. No credit card needed.</span>
                    </div>

                    <img src="{{ asset('frontend/assets/img/abstracts/cta-1-element-1.svg') }}" alt="cta-1-element-1"
                        width="414" height="367"
                        class="jos absolute -bottom-20 right-0 -z-10 hidden xl:inline-block" data-jos_animation="zoom-in">
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!--...::: CTA Section End :::... -->
@endsection
