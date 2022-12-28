@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_info_career.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">人才招募</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">資訊</li>
                    <li class="text-white">人才招募</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section>
    <div class="container">
        <!-- latest -->
        <div class="row mb-12 mb-md-30">
            <div class="offset-md-1 col-md-10">
                <div class="mb-4 overflow-hidden">
                    <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                        <div class="ratio_inner bg-cover hover_transform_scale"
                            style="background-image: url('/front/assets/images/info_news_img06.jpeg');"></div>
                    </a>
                </div>
                <div class="d-flex flex-column flex-lg-row align-items-lg-start">
                    <div class="col-lg-4">
                        <h3 class="title_h2">Sales Associate</h3>
                    </div>
                    <div class="col-lg-8 ps-lg-5">
                        <p class="text-muted fs-7 fs-md-6">The pace is fast, the customers are curious, and having an all-for-one, customer-centric team mentality is huge.</p>
                        <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                            <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest end -->
        <div class="row mb-12 mb-md-20">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img06.jpeg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Service Technician / Advisor</h3>
                            <p class="text-muted fs-7 fs-md-6">We’re looking for a teammate with stellar customer service chops, a willingness to learn, and a real motivation to build skills as a technician.</p>
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img06.jpeg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Service Manager</h3>
                            <p class="text-muted fs-7 fs-md-6"></p>
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-12 listBox moreBox">
                        <div class="mb-4 overflow-hidden">
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="ratio_outer" style="padding-bottom: 66%;">
                                <div class="ratio_inner bg-cover hover_transform_scale"
                                    style="background-image: url('/front/assets/images/info_news_img06.jpeg');"></div>
                            </a>
                        </div>
                        <div class="">
                            <h3 class="title_h2">Service Technician/Advisor</h3>
                            <p class="text-muted fs-7 fs-md-6">We’re looking for a teammate with stellar customer service chops and a willingness to learn.</p>
                            <a href="{{route('front.recruit.show',['lang'=>$lang,'recruit'=>1])}}" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="javascript:void(0)" class="c_btn btn_outline_dark" id="loadMore">LOAD MORE</a>
                </div>
            </div>
        </div>
        <!-- <div class="row mb-12 mb-md-20">
            <div class="offset-md-1 col-md-10">
                <div class="row">
                </div>
            </div>
        </div> -->
    </div>

</section>
@endsection