@extends('layouts.master')
@section('title' , 'Home')
@section('content')


    <!-- Title page -->
    <section class="bg0 p-t-75 p-b-0" style="padding-top: 100px">
        <div class="container">

            <div class="row p-b-70">

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">
                    <div>
                        <h1 class="p-b-15">National Bio Health</h1>
                        <h3 class="p-b-15">successful <span class="text_blue">Partners</span>  </h3>
                        <p>Our values drive us all the time to be a successful, loyal, and reputable business partner to all
                            our Customers and the Principals we represent.</p>

                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">
                    <div class="  ">
                        <div class="hov-img0">
                            <img src="{{asset($footers->logo) ?? asset('images/no-image.png') }}" alt="IMG">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>



    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            @isset($partner_all)
                @foreach($partner_all as $item)
            <!-- item blog -->
            <div class="row">

                <div class="col-md-12 col-lg-12 p-b-80">
                    <div class="p-r-45 p-r-0-lg">
                        <!-- item blog -->
                        <div class="p-b-20 p-t-20 flexPartiner">
                            <div class="col-md-3 col-lg-3">
                                <a href="{{route('product_show',['id'=>$item->id])}}" class="hov-img0 how-pos5-parent">
                                    <img src="{{asset($item->partner_img) ?? asset('images/no-image.png') }}" alt="IMG-BLOG"
                                    style="max-width: 100%;  height: 150px !important;width: 90% !important;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: 50% 50%;
                                    padding: 7px; ">

                                </a>
                            </div>

                            <div class="col-md-7 col-lg-7">
                                <div class="p-t-32">
                                    <h4 class="p-b-15">
                                        <a href="{{route('product_show',['id'=>$item->id])}}" class="ltext-108 cl2 hov-cl1 trans-04">
                                            {{$item->partner_name}}
                                        </a>
                                    </h4>

                                    <p class="stext-117 cl6">
                                        {{$item->partner_description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
                @endforeach
            @endisset


        </div>
    </section>






@endsection
