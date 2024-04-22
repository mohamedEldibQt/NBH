
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-3 p-b-50">
                <a href="">
                    <img src="{{asset('./images/logo.png')}}" alt="">
                </a>

                <p class=" cl7 ">
                    {{$footers->footer_description}}.
                </p>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">

            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Help and Support
                </h4>

                <ul>

                    <li class="p-b-10">
                        <a href="{{ url('/') }}" class="stext-107 cl7 hov-cl1 trans-04">
                            Home
                        </a>
                    </li>
                    <li class="p-b-10">
                        <a href="{{route('about_show')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            About Us
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{route('partner_show')}}" class="stext-107 cl7 hov-cl1 trans-04">
                            Partners
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="{{ url('contact') }}" class="stext-107 cl7 hov-cl1 trans-04">
                            Contact Us
                        </a>
                    </li>

                </ul>
            </div>



            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    contact us
                </h4>

                <p class="stext-107 cl7 size-201">
                    <i class="fa fa-map-marker"></i> &MediumSpace;
                    {{$footers->location}}
                </p><br>
                <p class="stext-107 cl7 size-201">
                    <i class="fa fa-phone"></i>&MediumSpace;
                    {{$footers->phone_num}}
                </p>


                <div class="p-t-27">
                    <p class="cl7">
                        we are active on social media
                    </p>
                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                </div>
            </div>

        </div>

        <div class="p-t-40">

            <p class="stext-107 cl6 txt-center">
                COPYRIGHT NATIONAL BIO HEALTH&copy;<script>document.write(new Date().getFullYear());</script> | made
                by <a class="copyright-a" href="https://sherifshalaby.tech/" target="_blank"> sherifshalaby.tech </a>
            </p>
        </div>
    </div>



<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>
