@extends('layout.publicSite.CommonPage')
@section('news')
    <li><a href='{{URL('news')}}'rel="m_PageScroll2id">news</a></li>
@stop
@section('Hsign_in')
    <li class="sign-in"><a href="">Sign in</a></li>
@stop

@section('content')
    @if(count($sections) > 0 )
        @foreach($sections as $section)
            @switch($section->sectionName)
                @case('section_home')
                <section class="section_home" id="home">
                    <div class="container">
                        <div class="home_txt">
                            <h1 class="wow fadeInUp">{{$section->sectionTitle}}</h1>
                            <p class="wow fadeInUp">{{$section->content}}</p>
                        </div>
                    </div>
                </section>
                <!--section_home-->
                @break
                @case('section_services')
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
                                        <h2>{{$section->sectionTitle}}</h2>
                                    </div>
                                    <p>{{$section->content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section_services-->
                @break
                @case('section_curriculum')
                <section class="section_curriculum" id="curriculum" style="background:{{asset('images/Bg-Curriclum.png')}};">
                    <div class="container">
                        <div class="content-curriculum">
                            <div class="sec_head wow fadeInUp">
                                <h2>{{$section->sectionTitle}}</h2>
                            </div>
                            <p>{{$section->content}}</p>
                        </div>
                    </div>
                </section>
                <!--section_curriculum-->
                @break
                @case('section_secrets')
                <section class="section_secrets">
                    <div class="container">
                        <div class="sec_head text-center wow fadeInUp">
                            <h2>{{$section->sectionTitle}}</h2>
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
                @break
                @case('section_courses')

                <section class="section_courses">
                    <div class="container">
                        <div class="content-courses">
                            <div class="sec_head wow fadeInUp">
                                <h2>{{$section->sectionTitle}}</h2>
                                <p>{{$section->content}}</p>
                            </div>
                            <div class="course-item">
                                <img src="{{asset('images/course.png')}}" alt="" class="img-responsive">
                                <a href="" class="click-video"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section_courses-->

                @break
                @case('section_our_team')
                <section class="section_our_team" id="team">
                    <div class="container">
                        <div class="sec_head text-center">
                            <h2>{{$section->sectionTitle}}</h2>
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

                @break
                @case('section_instructors')
                <section class="section_instructors" id="instructors">
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
                                        <p>{{$section->content}}</p>
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
                @break
                @case('section_contact')

                <section class="section_contact" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sec_head">
                                    <h2>{{$section->sectionTitle}}</h2>
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


                @break
            @endswitch
        @endforeach
    @endif













@stop
@section('script')

    <script src="{{URL::asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsVCH2AY7nJecNz41eiAGCMdupbk0qNnE&amp;sensor=true"></script>

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
