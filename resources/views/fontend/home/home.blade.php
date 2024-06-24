@extends('fontend.layouts.master')

@section('content')
    @include('fontend.home.sections.banner-slider')
    <section id="wsus__banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__banner_content">
                        <div class="row banner_slider">
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_1.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>men's fashion</h1>
                                        <h6>start at $99.00</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_2.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>kid's fashion</h1>
                                        <h6>start at $49.00</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(images/slider_3.jpg);">
                                    <div class="wsus__single_slider_text">
                                        <h3>new arrivals</h3>
                                        <h1>winter collection</h1>
                                        <h6>start at $99</h6>
                                        <a class="common_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BANNER PART 2 END
    ==============================-->


    <!--============================
        FLASH SELL START
    ==============================-->
    @include('fontend.home.sections.flash-sale')
    <!--============================
        FLASH SELL END
    ==============================-->


    <!--============================
       MONTHLY TOP PRODUCT START
    ==============================-->
    @include('fontend.home.sections.top-category-product')
    <!--============================
       MONTHLY TOP PRODUCT END
    ==============================-->


    <!--============================
        BRAND SLIDER START
    ==============================-->
    @include('fontend.home.sections.banner-slider')
    <!--============================
        BRAND SLIDER END
    ==============================-->


    <!--============================
        SINGLE BANNER START
    ==============================-->
    @include('fontend.home.sections.single-banner')
    <!--============================
        SINGLE BANNER END
    ==============================-->


    <!--============================
        HOT DEALS START
    ==============================-->
    @include('fontend.home.sections.hot-deals')
    <!--============================
        HOT DEALS END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    @include('fontend.home.sections.category-product-slider-one')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    @include('fontend.home.sections.category-product-slider-two')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        LARGE BANNER  START
    ==============================-->
    @include('fontend.home.sections.larg-banner')
    <!--============================
        LARGE BANNER  END
    ==============================-->


    <!--============================
        WEEKLY BEST ITEM START
    ==============================-->
    @include('fontend.home.sections.weekly-best-item')
    <!--============================
        WEEKLY BEST ITEM END
    ==============================-->


    <!--============================
      HOME SERVICES START
    ==============================-->
    @include('fontend.home.sections.services')
    <!--============================
        HOME SERVICES END
    ==============================-->
    @include('fontend.home.sections.blog')

    <!--============================
        HOME BLOGS START
    ==============================-->

@endsection
