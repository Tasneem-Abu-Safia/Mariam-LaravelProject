@extends('layout.publicSite.CommonPage')

@section('mobile-menu')

    <li class="active"><a href="">Home</a></li>
    <li><a href="" rel="m_PageScroll2id">About</a></li>
    <li><a href="#curriculum" rel="m_PageScroll2id">Curriculum</a></li>
    <li><a href="#team" rel="m_PageScroll2id">Team</a></li>
    <li><a href="blogs.html" rel="m_PageScroll2id">Blogs</a></li>
    <li><a href="#instructors" rel="m_PageScroll2id">Instructors</a></li>
    <li><a href="courses.html">Courses</a></li>
    <li><a href="products.html" rel="m_PageScroll2id">Products</a></li>
    <li><a href="#contact" rel="m_PageScroll2id">Connect</a></li>
    <li><a href="">AR</a></li>
    <li class="register"><a href="">Register</a></li>
    <li class="sign-in"><a href="">Sign in</a></li>
@stop
@section('header')
    <li class="active"><a href="index.html">Home</a></li>
    <li><a href="#about" rel="m_PageScroll2id">About</a></li>
    <li><a href="#curriculum" rel="m_PageScroll2id">Curriculum</a></li>
    <li><a href="#team" rel="m_PageScroll2id">Team</a></li>
    <li><a href="#instructors" rel="m_PageScroll2id">Instructors</a></li>
    <li><a href="courses.html">Courses</a></li>
    <li><a href="news.html" rel="m_PageScroll2id">news</a></li>
    <li><a href="products.html" rel="m_PageScroll2id">Products</a></li>
    <li><a href="#contact" rel="m_PageScroll2id">Connect</a></li>
    <li><a href="">AR</a></li>
    <li class="sign-in"><a href="">Sign in</a></li>
@stop
@section('content')
    <section class="section_home" id="home">
        <div class="container">
            <div class="home_txt">
                <h1 class="wow fadeInUp">The best  Website to sell courses</h1>
                <p class="wow fadeInUp">It Is A Long Established Fact That AReader Will Be Distrac EstablFact That A Reader Will Be Many Web Sites Sti Their Infancy. </p>
            </div>
        </div>
    </section>
    <!--section_home-->

    <section class="section_about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-about wow fadeInUp">
                        <img src="{{asset('images/about.png')}}"  alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-about wow fadeInUp">
                        <div class="sec_head">
                            <h2>About Us</h2>
                        </div>
                        <p>It is a long established fact that adevcx reade will be distracted by the readable contenccct ofa page when          looking at its It is a long estab  fact that adevcx reader will be distracted by t readable contenccct ofa page      when looking look like readable English.t is a long established fact that adevcx reade  readable              contenccct ofa page when looking look like readable English.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section_services-->

    <section class="section_curriculum" id="curriculum" style="background:{{asset('images/Bg-Curriclum.png')}};">
        <div class="container">
            <div class="content-curriculum">
                <div class="sec_head wow fadeInUp">
                    <h2>About Curriculum</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
            </div>
        </div>
    </section>
    <!--section_curriculum-->

    <section class="section_secrets">
        <div class="container">
            <div class="sec_head text-center wow fadeInUp">
                <h2>Learn the secrets of success</h2>
            </div>
            <div class="static-secrets wow fadeInUp">
                <div class="box-static-secrets">
                    <h2>4000</h2>
                    <p>Enrolled</p>
                </div>
                <div class="box-static-secrets">
                    <h2>1000</h2>
                    <p>Goliaths Finished</p>
                </div>
                <div class="box-static-secrets">
                    <h2>99.9%</h2>
                    <p>Percentage Of Satisfaction</p>
                </div>
            </div>
            <div class="owl-carousel" id="slider-testi">

                <div class="item">
                    <div class="content-testi">
                        <figure>
                            <img src="{{asset('images/pro.png')}}" alt="" />
                        </figure>
                        <time>20 Jan 2020</time>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <div class="sec-title">
                            <h6>ALa Nasrallah</h6>
                            <div class="rate-testi">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section_secrets-->

    <section class="section_courses">
        <div class="container">
            <div class="content-courses">
                <div class="sec_head wow fadeInUp">
                    <h2>Sign Up </h2>
                    <p>With Us For Best Courses</p>
                </div>
                <div class="course-item">
                    <img src="{{asset('images/course.png')}}" alt="" class="img-responsive">
                    <a href="" class="click-video"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--section_courses-->

    <section class="section_our_team">
        <div class="container">
            <div class="sec_head text-center">
                <h2>Our Team That We Trust</h2>
            </div>
            <div class="owl-carousel" id="team-slider">
                <div class="item">
                    <div class="box-team">
                        <figure>
                            <img src="{{asset('images/team1.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <h3>Ahmed Alsyed</h3>
                            <p>Blog Administrator</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-team">
                        <figure>
                            <img  src="{{asset('images/team2.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <h3>Diana Saif Nabil</h3>
                            <p>Videos Admin</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-team">
                        <figure>
                            <img src="{{asset('images/team3.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <h3>Shimaa Zakarya</h3>
                            <p>Executive Director</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-team">
                        <figure>
                            <img src="{{asset('images/team4.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <h3>Mohammad Ali</h3>
                            <p>General Director</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box-team">
                        <figure>
                            <img src="{{asset('images/team1.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <h3>Dalia Hana</h3>
                            <p>Blog Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section_our_team-->

    <section class="section_instructors">
        <div class="container">
            <div class="owl-carousel" id="instructors-slider">
                <div class="item">
                    <div class="box-instructors">
                        <figure>
                            <img src="{{asset('images/instructors.png')}}"/>
                        </figure>
                        <div class="sec-title">
                            <div class="sec_head">
                                <h2>About Instructors</h2>
                            </div>
                            <p>It is a long established fact that adevcx re will be distracted by the readable contenc ct ofa page when        looking at its It is a long estab  fact that adevcx reader will be distr by t readable contenccct ofa page      when look like readable English.<br />It is a long established fact that adevcx re  readable contenccct ofa    page when lookin look like readable English.</p>
                            <div class="name-inst">
                                <figure><img src="{{asset('images/team3.png')}}"
                                             alt="" /></figure>
                                <div>
                                    <h3>Shimaa Zakarya</h3>
                                    <span>uxui designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section_instructors-->

    <section class="section_contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sec_head">
                        <h2>Connect Us</h2>
                    </div>
                    <form class="form-contact">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" />
                            <img src="{{asset('images/user.svg')}}" alt="" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" />
                            <img src="{{asset('images/email.svg')}}"
                                 alt="" />
                        </div>
                        <div class="form-group des-mess">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-send"><span>Send</span></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="googleMap2"></div>
                    <ul class="list-contact">
                        <li>
                            <figure>
                                <i class="fa fa-marker"></i>
                            </figure>
                            <div class="sec-title">
                                <h4>Location :</h4>
                                <p>Jurain,Dhaka Bangladesh</p>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <i class="fa fa-envelope"></i>
                            </figure>
                            <div class="sec-title">
                                <h4>Email :</h4>
                                <p class="number-site">Websitename@Mail.Com</p>
                            </div>
                        </li>
                        <li>
                            <figure>
                                <i class="fa fa-phone"></i>
                            </figure>
                            <div class="sec-title">
                                <h4>Mobile :</h4>
                                <p class="number-site">+1234321321</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--section_contact-->




@stop
@section('script')
    <script src="{{URL::asset('js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery.malihu.PageScroll2id.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/wow.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsVCH2AY7nJecNz41eiAGCMdupbk0qNnE&amp;sensor=true"></script>
    <script src="{{URL::asset('js/script.js')}}" type="text/javascript"></script>

    <script>

        new WOW().init();

        (function($){
            $(window).on("load",function(){

                /* Page Scroll to id fn call */
                $("a[rel='m_PageScroll2id']").mPageScroll2id({
                    scrollSpeed: 1200
                    ,scrollEasing:"easeOutQuint"
                    ,liveSelector:"a[rel='m_PageScroll2id']"
                });

            });
        })(jQuery);

        istener(window, 'load', initialize);
    </script>
    <script type="text/javascript">
        var mapLocation = new google.maps.LatLng(51.508742,-0.120850); //change coordinates here
        var marker;
        var map;

        function initialize() {
            var mapOptions = {
                zoom: 6, //change zoom here
                scrollwheel: false,
                center: mapLocation
            };

            map = new google.maps.Map(document.getElementById('googleMap2'),
                mapOptions);

            var image = 'images/pin.png';
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                title: 'Site Name', //change title here
                icon: image,
                // animation: google.maps.Animation.DROP,
                // animation: google.maps.Animation.BOUNCE,
                position: mapLocation
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop
