<footer class="text-center space--sm footer-5 imagebg">
        <div class="background-image-holder">
            <img alt="background" src="vendor/img/brush-footer.png" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-block m-b-30">
                        <ul class="list-inline list--hover">
                            <li>
                                <a href="{{route('guest.boat_schedule')}}">
                                    <span>Boat Schedule</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('guest.packages')}}">
                                    <span>Packages</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('guest.how_to_book')}}">
                                    <span>How to Book</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="social-list list-inline list--hover">
                            <li>
                                <a href="https://www.facebook.com/escapenusapenida/">
                                    <i class="socicon socicon-facebook icon-pandu icon--xs"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/escapenusapenida/">
                                    <i class="socicon socicon-instagram icon-pandu icon--xs"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <span class="type--fine-print">Made in Bali</span>
                    </div>
                    <div>
                        <span class="type--fine-print">&copy;
                            <span class="update-year"></span> {{$profile->name}}</span>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </footer>