@extends('layouts.master')
@section('title' , 'Home')
@section('content')


    <!-- Title page -->
    <section class="bg0 p-t-75 p-b-0" style="padding-top: 110px">
        <div class="container">
            <div class="row p-b-70">
                <div class="col-11 col-md-11 col-lg-11 m-lr-auto">
                    <div class="  ">
                        <div class="hov-img0">
                            <img src="{{asset($footers->logo) ?? asset('images/no-image.png') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">

            <div class="row p-b-148">
                <div class="col-md-7 col-lg-7">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            @isset($branch)
                                <span class="text_blue">About</span>
                               {{$branch->branch_name}}
                                Branch
                            @endisset
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            @isset($branch)
                                {{$branch->branch_description}}.
                            @endisset
                        </p>

                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-5 m-lr-auto">

                    <section class="section-slide ">
                        <div class="wrap-slick1">
                            <div class="slick1">
                              
                                    @foreach($branch->images as $branch_img)
                                        <div class="item-slick1"
                                             style="
                                             background-image: url(' {{asset('images/'.$branch_img->img)}}');
                                             height: calc(50vh - 40px);
                                                background-size: cover;
                                                background-repeat: no-repeat;
                                                background-position: center center;
                                             ">
                                        </div>
                                    @endforeach
                                   
                            </div>
                        </div>
                    </section>
                </div>

            </div>





            <h3 class="mtext-111 cl2 p-b-16">
                @isset($branch)
                    <span class="text_blue">   {{$branch->branch_name}}</span> Branche’s Team
                @endisset
            </h3>
            <div class="row p-b-148">
                @isset($branchTeamAll)
                    @foreach($branchTeamAll as $item)
                <div class="col-12 col-md-3 col-lg-3">
                    <div class=" m-lr-auto">
                        <div class="team_img">
                            <div class="hov-img0">
                                <img src="{{asset($item->branch_team_img) ?? asset('images/no-image.png') }}" alt="IMG">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4> {{$item->branch_team_position}}</h4>
                        <h4> {{$item->branch_team_name}}</h4>
                        <span> {{$item->branch_team_description}}</span>
                    </div>
                </div>
                    @endforeach
                @endisset

            </div>




            @isset($branchFutureAll)
                @foreach($branchFutureAll as $item)
                    <div class="row" style="margin-bottom: 70px">
                        <div class="order-md-2 col-md-7 col-lg-6 p-b-30">
                            <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                                <h3 class="mtext-111 cl2 p-b-16">
                                    The Future <br> <span class="text_blue"> of  {{$item->branch_future_name}} </span>
                                </h3>

                                <p class="stext-113 cl6 p-b-26">
                                    {{$item->branch_future_description}}
                                </p>

                            </div>
                        </div>

                        <div class="order-md-1 col-11 col-md-5 col-lg-6 m-lr-auto p-b-30">
                            <div class="how-bor2">
                                <div class="hov-img0">
                                    <img src="{{asset($item->branch_future_img) ?? asset('images/no-image.png') }}" alt="IMG">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset




        </div>
    </section>


@endsection
