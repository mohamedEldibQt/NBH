@extends('layouts.master')
@section('title' , 'About')
@section('content')

    <!-- Title page -->
    <section class="sectionHeaderAboutBg bg-img1 txt-center p-lr-15 p-tb-92"  >
        <h2 class="ltext-105 cl0 txt-center">
            About us
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">

            <div class="row p-b-148">
                <div class="col-12 col-md-7 col-lg-6">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            About Us
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            @isset($about)
                            {{$about->description}}.
                            @endisset
                        </p>

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-6 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            @isset($about)
                            <img src="{{asset($about->about_img) ?? asset('images/no-image.png') }}" alt="IMG">
                            @endisset
                        </div>
                    </div>
                </div>
            </div>


            <div class="row p-b-148">

                <div class="col-md-6 col-lg-6">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            MISSION
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            @isset($about)
                            {{$about->mission}}
                            @endisset
                        </p>

                        <h3 class="mtext-111 cl2 p-b-16">
                            VISION
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            @isset($about)
                            {{$about->vision}}
                            @endisset
                        </p>

                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            OUR VALUES
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            @isset($about)
                            {{$about->our_value}}
                            @endisset
                        </p>
                    </div>
                </div>
            </div>



            <div class="row ">
                <h3 class="mtext-111 cl2 p-b-16">
                    OUR Team
                </h3>
            </div>
            <div class="row p-b-148">

    @isset($aboutTeamAll)
        @foreach($aboutTeamAll as $item)
                <div class="col-12 col-md-3 col-lg-3">
                    <div class=" m-lr-auto">
                        <div class="team_img">
                            <div class="hov-img0">
                                <img src="{{asset($item->team_img) ?? asset('images/no-image.png') }}" alt="IMG"
                                style="max-width: 100%;  height: 400px !important;width: 100% !important;
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: 50% 50%; " >
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4> {{$item->team_position}}</h4>
                        <h4> {{$item->team_name}}</h4>
                        <span> {{$item->team_description}}</span>
                    </div>
                </div>
        @endforeach
    @endisset



            </div>



            @isset($aboutFutureAll)
                @foreach($aboutFutureAll as $item)
            <div class="row" style="margin-bottom: 70px">
                <div class="order-md-2 col-md-7 col-lg-6 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            The Future <br> <span class="text_blue"> of  {{$item->future_name}} </span>
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            {{$item->future_description}}
                        </p>

                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-6 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{asset($item->future_img) ?? asset('images/no-image.png') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            @endisset




        </div>
    </section>



@endsection
