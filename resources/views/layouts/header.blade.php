
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('images/logondh.png') }}" alt="IMG">
                </a>


                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">


                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="{{ (request()->is('/')) ? 'active-menu' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <li  class=" {{ (request()->is('partners')) ? 'active-menu' : '' }}">
                                <a href="{{route('partner_show')}}">Partners</a>
                            </li>

                            <li class=" {{ (request()->is('about')) ? 'active-menu' : '' }}" >
                                <a href="{{route('about_show')}}">About Us</a>
                            </li>

                            <li class=" {{ (request()->is('contact')) ? 'active-menu' : '' }}">
                                <a href="{{ url('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>


                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="{{ url('/') }}"><img src="{{asset('images/logondh.png')}}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">

        <ul class="main-menu">
            <li class="{{ (request()->is('/')) ? 'active-menu' : '' }}">
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li  class=" {{ (request()->is('partners')) ? 'active-menu' : '' }}">
                <a href="{{route('partner_show')}}">Partners</a>
            </li>

            <li class=" {{ (request()->is('about')) ? 'active-menu' : '' }}" >
                <a href="{{route('about_show')}}">About Us</a>
            </li>

            <li class=" {{ (request()->is('contact')) ? 'active-menu' : '' }}">
                <a href="{{route('contact_create')}}">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" action="{{ route('search') }}" method="GET">
                <button class="flex-c-m trans-04" type="submit">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>

        </div>
    </div>
