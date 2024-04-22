@extends('layouts.master')
@section('title' , 'Home')
@section('content')


    <!-- Title page -->
    <section class="sectionHeaderContactBg bg-img1 txt-center p-lr-15 p-tb-92"  >
        <h2 class="ltext-105 cl0 txt-center">
            Contact
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">


                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <div class="flex-w w-full ">
                        <div class="col-12 col-md-12 col-lg-12 m-lr-auto">
                            <div class="  ">
                                <div class="hov-img0">
                                    <img src="{{ asset('images/logondh.png') }}" alt="IMG">
                                </div>
                            </div>
                        </div>
                    </div>

                @php
                    $footer = \App\Models\Footer::get();
                @endphp
                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Location
							</span>

                            <p class="stext-115 cl6 size-213 p-t-18">
                                {{$footers->location}}.
                            </p>
                        </div>
                    </div>

                    <div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Call us
							</span>
                            @isset($footer)
                            @foreach($footer as $item)
                                <p class="stext-115 cl1 size-213 p-t-18">
                                    {{$item->phone_num}}

                                </p>
                            @endforeach
                            @endisset
                        </div>
                    </div>

                    <div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

                        <div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Mail us
							</span>

                            @isset($footer)
                            @foreach($footer as $item)
                                <p class="stext-115 cl1 size-213 p-t-18">
                                    {{$item->contact_email}}

                                </p>
                            @endforeach
                            @endisset

                        </div>
                    </div>
                </div>


                <div class="size-210 bor10 flex-w flex-col-m p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form class="form" action="{{route('contact_store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Contact Now
                        </h4>
                        <span class="p-b-70">
							   {{$footers->footer_description}}.
						</span>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name_contact" placeholder="name">

                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email_contact" placeholder="Email">

                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone_contact" placeholder="phone">

                        </div>

                        <div class="bor8 m-b-30">
                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="massage_contact" placeholder="How Can We Help?"></textarea>
                        </div>

                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Submit
                        </button>
                    </form>
                </div>



            </div>


            <div class="row" style="padding: 50px 0 0 0;
                                    display: flex;
                                    flex-wrap: wrap;
                                    justify-content: center;
                                    background-color: #0052BD;
                                    border-radius: 20px;
                                    margin-top: 20px;
                                    text-align: center;">
                <div class="col-12 col-md-8 col-lg-8 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Subscribe To Our Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1" style="display: flex;flex-wrap: nowrap;align-items: center;">
                            <input style="background-color: #fff; border-radius: 150px;padding: 15px;"
                                class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                            <button style="border-radius: 50%; padding: 10px; width: 50px;height: 50px;position: absolute; right: 0;margin-right: 5px;"
                                    class="flex-c-m stext-101 cl0  bg3 bor1 hov-btn3 p-lr-15 trans-04">
                                ->
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>



@endsection
