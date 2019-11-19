<div class="nav-container ">
    <div class="bar bar--sm bar--mobile-sticky visible-xs" data-scroll-class='10vh:pos-fixed'>
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-2">
                    <a href="{{route('guest.home')}}">
                        <img class="logo-pandu  logo-dark" alt="logo" src="{{ URL::asset('vendor/img/logo-dark.png') }}" />
                        <img class="logo-pandu  logo-light" alt="logo" src="{{ URL::asset('vendor/img/logo-white.png') }}" />
                    </a>
                </div>
                <div class="col-9 col-md-10 text-right">
                    <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                        <i class="icon icon--sm stack-interface stack-menu"></i>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <!--end bar-->
    <nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute" data-scroll-class='10vh:pos-fixed' style="padding: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
                    <div class="bar__module">
                        <a href="{{route('guest.home')}}">
                            <img class="logo-pandu  logo-dark" alt="logo" src="{{ URL::asset('vendor/img/logo-dark.png') }}" />
                            <img class="logo-pandu  logo-light" alt="logo" src="{{ URL::asset('vendor/img/logo-white.png') }}" />
                        </a>
                    </div>
                    <!--end module-->
                </div>
                <div class="col-lg-5 order-lg-1">
                    <div class="bar__module">
                        <ul class="menu-horizontal text-left">
                            <li>
                                <a href="{{url('/#home')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('/#packages')}}">Packages</a>
                            </li>
                            <li>
                                <a href="{{url('/#gallery')}}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{url('/#contact')}}">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!--end module-->
                </div>
                <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
                    <div class="bar__module">
                        <a class="btn btn--sm type--uppercase style-btn" href="{{route('guest.boat_schedule')}}">
                            <span class="btn__text">
                                Boat Schedule
                            </span>
                        </a>
                        <a class="btn btn--sm btn--primary type--uppercase style-btn" href="{{route('guest.how_to_book')}}">
                            <span class="btn__text">
                                Book Now
                            </span>
                        </a>
                    </div>
                    <!--end module-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
    <!--end bar-->
</div>