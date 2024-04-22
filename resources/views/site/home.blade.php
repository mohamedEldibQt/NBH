@extends('layouts.master')
@section('title' , 'Home')
@section('content')


    <!-- Slider -->
    <section class="section-slide  p-b-60">
        <div class="wrap-slick1">
            <div class="slick1">
@isset($headers)
        @foreach($headers as $item)
                <div class="item-slick1" style="
    overflow: hidden;
    background: #C04848;  
    background: linear-gradient(90.17deg, rgba(0, 82, 189, 0.8) 15.34%, rgba(255, 255, 255, 0.312) 104.32%), url(' {{asset($item->image) ?? asset('images/no-image.png') }}') ;
    background-size: cover;
    background-repeat: no-repeat;">
                    
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-201 cl0 p-t-19 p-b-43 respon1">
                                    {{$item->title}} <br>

                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false  p-b-43" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl0 respon2">
									   {{$item->sub_title}}
								</span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="#" class="flex-c-m stext-101 cl0 size-101  bor1 hov-btn1 p-lr-15 trans-04" style="background-color: #2cb1f6;">
                                    Explore now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
@endisset


            </div>
        </div>
    </section>


    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        @isset($about)
                            <img src="{{asset($about->about_img) ?? asset('images/no-image.png') }}" alt="IMG">
                        @endisset

                        <a href="{{route('about_show')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <!--<span class="block1-name ltext-102 trans-04 p-b-8">
                                    Men
                                </span> -->
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    About us
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-xl-8 p-b-30 m-lr-auto">

                    <h2 class="p-b-20">About us</h2>

                    <p class="p-b-30">
                        @isset($about)
                            {{$about->description}}.
                        @endisset
                    </p>
                    <a href="{{route('about_show')}}" >
                    <button class="flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn1 p-lr-15 trans-04">

                       read more
                    </button>
                    </a>

                </div>

            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    OUR BRANCHE
                </h3>
            </div>

            <div class="row">
                <div class="wrapper">
                    <div class="main-slider-section">
                        <div class="main-slider swiper-container">
                            @isset($branchs)
                                @foreach($branchs as $branch )

                                <div class="swiper-wrapper">
                                        <a class="swiper-slide " href="{{route('branch_show',$branch->slug)}}">
                                            <div class="block-slider swiper-container">
                                                <div class="swiper-wrapper">

                                                    @foreach($branch->images as $branch_img)
                                                        <div class="swiper-slide">
                                                            <img src="{{asset('images/'.$branch_img->img)}}" alt="" style="height: 88%;">
                                                            <p style=" color: #333;font-size: 22px;padding-top: 3px;">
                                                                {{$branch->branch_name}}
                                                            </p>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div class="swiper-button-prev prev-btn" id="nextBTN"></div>
                                                <div class="swiper-button-next next-btn" id="prevBTN"></div>
                                            </div>
                                        </a>
                                </div>

                                @endforeach
                            @endisset
                        </div>

                        <div class="swiper-button-prev uploaded-in-prev" id="nextMainBTN"></div>
                        <div class="swiper-button-next uploaded-in-next" id="prevMainBTN"></div>



                    </div>
                </div>
            </div>
            <!-- Load more -->

        </div>
    </section>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140 ourPartners">
        <div class="container">

            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Our Partners
                </h3>
            </div>


            <div class="customer-logos slider p-b-40">

                @isset($partner_all)
                    @foreach($partner_all as $item)
                        <div class="slide">
                            <a href="{{route('product_show',['id'=>$item->id])}}">
                         
                                    <img src="{{asset($item->partner_img) ?? asset('images/no-image.png') }}"alt="IMG-BLOG"
                                    style=" width: 90%; height: 195px;margin-bottom: 25px; margin-left:5%;">
                              
                               
                                <h3 class="cl2 p-b-10"> {{$item->partner_name}}</h3>
                                <p class="cl2 p-b-10">{{$item->partner_s_description}}</p>
                            </a>
                        </div>
                    @endforeach
                @endisset

            </div>

            <div class="layer-slick1 animated  " data-appear="zoomIn" data-delay="1600" style="width: 140px">
                <a href="{{route('partner_show')}}" class="flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn1 p-lr-15 trans-04">
                    View All
                </a>
            </div>
        </div>
    </section>

@endsection
