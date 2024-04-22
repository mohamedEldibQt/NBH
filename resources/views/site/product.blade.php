@extends('layouts.master')
@section('title' , 'Home')
@section('content')

    <!--   -->
    <section class="bg0 p-t-140 p-b-120" >
        <div class="container">

            <div class="row p-b-148 flexProduct">

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">
                    <div >
                        <div >
                            <img class="p-b-30" src="{{asset($partner->partner_img)}}" alt="IMG" 
                            style="max-width: 100%;  height: 200px !important;width: 60% !important;
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: 50% 50%;
                            padding: 7px; ">
                            <h2 class="p-b-30"> <span class="text_blue">{{$partner->partner_name}}</span></h2>
                        </div>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">
                    <div >
                        <div class="hov-img0">
                            <img src="{{asset('images/logondh.png')}}" alt="IMG">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row p-b-148">

                <div class="col-md-12 col-lg-12">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            About  <span class="text_blue">{{$partner->partner_name}}</span>
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            {{$partner->partner_description}}
                        </p>


                    </div>
                </div>

            </div>

        </div>
    </section>




    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <h3 class="mtext-111 cl2 p-b-16">
                  <span class="text_blue">  {{$partner->partner_name}}</span> Products
                </h3>

                <!-- Search product -->

                <!-- Filter -->
            </div>

            <div class="row isotope-grid">
                @isset($partner)
                    @foreach($partner->products as $item)



                <div class="col-sm-6 col-md-3 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-10" style="padding-left: 10px;font-size: 24px; color: #505050;">
                                {{$item->product_name}}
                            </a>
                        </div>
                    </div>

                    <div class="block2" style="border: 1px solid #0052bd; padding: 20px; border-radius: 10px;">
                        <div class="block2-pic hov-img0">

                            <img src="{{asset($item->product_img) ?? asset('images/no-image.png') }}" style=" height: 470px;" alt="IMG">

                         <!--   <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a> -->
                        </div>


                    </div>
                </div>


                    @endforeach
                @endisset

            </div>

            <!-- Load more
            <div class="flex-c-m flex-w w-full p-t-45">
                <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>-->
        </div>
    </div>


@endsection
