 <!-- ==============================================
    ** Footer **
    =================================================== -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="container">
            <div class="row row1">
                <div class="col-sm-9 clearfix">
                    <div class="foot-nav">
                        <h3>About US</h3>
                        <ul>
                            <li><a href="{{route('about')}}">About RMU</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{route('Vision&Mission')}}">Vision & Mission</a></li>
                            <li><a href="{{route('bot')}}">BOT</a></li>
                            <li><a href="{{route('accomodation')}}">Accomodation</a></li>
                            <li><a href="{{route('health')}}">Health & Safety</a></li>
                            <li><a href="{{route('convocation')}}">Convoctaion</a></li>
                            <li><a href="{{route('conference')}}">Conference</a></li>
                            <li><a href="{{route('journals')}}">Journals</a></li>
                            <li><a href="{{route('research')}}">Research</a></li>
                        </ul>
                    </div>
                    @php
                        $departments= App\Models\Department::get()->take(5);
                    @endphp
                    <div class="foot-nav">
                        <h3>Departments</h3>
                        <ul>
                            @foreach ($departments as $item)
                            <li><a href="{{$item->link}}">{{$item->name}}</a></li>
                                
                            @endforeach
                           
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Why RMU</h3>
                        <ul>
                            <li><a href="#">Introduction</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Modern Curriculum</a></li>
                            <li><a href="{{route('applicationprocess')}}">Application Process</a></li>
                            <li><a href="{{route('eligibility')}}">Eligibility</a></li>
                        </ul>
                    </div>
                    <div class="foot-nav">
                        <h3>Learning Experience</h3>
                        <ul>
                            <li><a href="{{ route('tuitionfee') }}">Tuition Fees</a></li>
                            <li><a href="#">Brochure</a></li>
                            <li><a href="#">Prospectus</a></li>
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-logo hidden-xs"><a href="{{ route('userhome')}}"><img src="{{ asset('public/themefronted/images/footer-logo.png')}}" class="img-responsive" alt=""></a></div>
                    <p>© {{date("Y")}} <span>Rabindra Maitree University</span>. All rights reserved</p>
                    <ul class="terms clearfix">
                        <li><a href="{{ route('privacy') }}">TERMS OF USE</a></li>
                        <li><a href="{{ route('privacy') }}">PRIVACY POLICY</a></li>
                        <li><a href="#">SITEMAP</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <!-- Start Footer Bottom -->
        @php
            $facebook= App\Models\Socialgroup::Where('type','Facebook')->first();
            $youtube= App\Models\Socialgroup::Where('type','Youtube')->first();
        @endphp
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="connect-us">
                            <h3>Connect with Us</h3>
                            <ul class="follow-us clearfix">
                                <li><a href="{{$facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="{{$youtube}}"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="subscribe">
                            <h3>Subscribe with Us</h3>
                            <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="//protechtheme.us16.list-manage.com/subscribe/post?u=cd5f66d2922f9e808f57e7d42&amp;id=ec6767feee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="enter your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_cd5f66d2922f9e808f57e7d42_ec6767feee" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="instagram">
                            <h3>@INSTAGRAM</h3>
                            <ul class="clearfix">
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img1.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img2.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img3.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img4.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img5.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                                <li><a href="#">
                                        <figure><img src="{{ asset('public/themefronted/images/insta-img6.jpg')}}" class="img-responsive" alt=""></figure>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

    <!-- Optional JavaScript -->
    <script src="{{ asset('public/themefronted/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/matchHeight/js/matchHeight-min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/bxslider/js/bxslider.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/waypoints/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/counterup/js/counterup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('public/themefronted/js/custom.js')}}"></script>
</body>

</html>