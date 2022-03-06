@extends('layout.publicSite.CommonPage')

@section('news')
    <li><a href='{{URL('news')}}'rel="m_PageScroll2id">news</a></li>
@stop
@section('Hnews')
    <li><a href='{{URL('news')}}'rel="m_PageScroll2id">news</a></li>
@stop
@section('Hsign_in')
    <li class="sign-in"><a href="">Sign in</a></li>
@stop

@section('content')

    <section class="section-head-page" style="background: url(images/bg-slide.png)">
        <div class="container">
            <div class="head-page">
                <h2>Social Media Marketing</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <strong>130.50 KWD</strong>
            </div>
        </div>
    </section>
    <!--section-head-page-->

    <div class="content-axes-course">
        <div class="container">
            <div class="feat-course">
                <h4>Course Axes :</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
    <div class="content-results-course">
        <div class="container">
            <div class="feat-course">
                <h4>Course Results :</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
    <div class="content-course">
        <div class="container">
            <div class="courseContent feat-course">
                <h4>Course Content</h4>
                <ul class="list-les">
                    <li>
                        <div class="accordion">
                            <p class="faqText">First Lesson :</p>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                        <div class="panel default">
                            <div class="list-lessons">
                                <div class="name-lesson">
                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                    <p>Lesson one : Lorem Ipsum Is Simply Dummy Text Of The Printing</p>
                                </div>
                                <div class="act-lessons">
                                    <time>24 : 18 m</time>
                                </div>
                            </div>
                            <div class="list-lessons">
                                <div class="name-lesson">
                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                    <p>Lesson Two : Lorem Ipsum Is Simply Dummy Text Of The Printing</p>
                                </div>
                                <div class="act-lessons">
                                    <time>7 : 30 m</time>
                                </div>
                            </div>
                            <div class="list-lessons">
                                <div class="name-lesson">
                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                    <p>Lesson Three : Lorem Ipsum Is Simply Dummy Text Of The Printing</p>
                                </div>
                                <div class="act-lessons">
                                    <time>7 : 30 m</time>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="accordion">
                            <p class="faqText">First Lesson :</p>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                        <div class="panel default">
                            <div class="list-lessons">
                                <div class="name-lesson">
                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                    <p>Lesson 2: Defining leadership</p>
                                </div>
                                <div class="act-lessons">
                                    <time class="number-site">7 : 30 m</time>
                                    <span>Complete</span>
                                    <i class="zmdi zmdi-check"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="accordion">
                            <p class="faqText">First Lesson :</p>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                        <div class="panel default">
                            <div class="list-lessons">
                                <div class="name-lesson">
                                    <i class="zmdi zmdi-play-circle-outline"></i>
                                    <p>Lesson 2: Defining leadership</p>
                                </div>
                                <div class="act-lessons">
                                    <time class="number-site">7 : 30 m</time>
                                    <span>Complete</span>
                                    <i class="zmdi zmdi-check"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-attachments-course">
        <div class="container">
            <div class="attachments-course feat-course">
                <h4>Attachments</h4>
                <ul class="list-attach">
                    <li>
                        <div class="name-attach">
                            <small><i class="icon-pdf">pdf</i></small>
                            <p>Software Solutions . Pdf</p>
                        </div>
                        <div class="act-attach">
                            <a>
                                <span>Download</span>
                                <i class="zmdi zmdi-cloud-download"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="name-attach">
                            <small><i class="icon-word">w</i></small>
                            <p>Software Solutions . Docx</p>
                        </div>
                        <div class="act-attach">
                            <a>
                                <span>Download</span>
                                <i class="zmdi zmdi-cloud-download"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content--course">
        <div class="container">
            <div class="course-presenter feat-course">
                <h4>Course Presenter</h4>
                <div class="sec-presenter">
                    <figure>
                        <img src="images/team1.png" />
                    </figure>
                    <div class="sec-tit">
                        <h3>Noor Hani</h3>
                        <span>Blog Administrator</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
            <!--
                            <div class="comment-course">
                                <h4>A Comment</h4>
                                <form class="add-comment">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Write A Comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-site"><span>Send</span></button>
                                    </div>
                                </form>
                            </div>
            -->
        </div>
    </div>


    <div class="cart-menu">
        <div class="head-cart">
            <img src="images/logo.svg" alt="" />
            <a href="#" class="toggle-nav"><i class="zmdi zmdi-close"></i></a>
        </div>
        <div class="body-cart hidden">
            <h3>Shoping cart</h3>
            <div class="list-cart">
                <div class="box-cart">
                    <figure>
                        <img src="images/proud1.png" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Lexat USB Flash Drives | Lexat</p>
                        <span class="number-site">20.00$</span>
                    </div>
                    <div class="count-cart">
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat number-site" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                        <a class="remove-cart"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="images/proud2.png" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Lexat USB Flash Drives | Lexat</p>
                        <span class="number-site">20.00$</span>
                    </div>
                    <div class="count-cart">
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat number-site" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                        <a class="remove-cart"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="images/proud3.png" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Lexat USB Flash Drives | Lexat</p>
                        <span class="number-site">20.00$</span>
                    </div>
                    <div class="count-cart">
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat number-site" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                        <a class="remove-cart"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="images/proud4.png" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Lexat USB Flash Drives | Lexat</p>
                        <span class="number-site">20.00$</span>
                    </div>
                    <div class="count-cart">
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat number-site" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                        <a class="remove-cart"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="images/proud1.png" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Lexat USB Flash Drives | Lexat</p>
                        <span class="number-site">20.00$</span>
                    </div>
                    <div class="count-cart">
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat number-site" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                        <a class="remove-cart"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
            </div>
            <div class="checkout-cart">
                <div class="title-ch">
                    <p>Total:</p>
                    <strong class="number-site">20.00$</strong>
                </div>
                <a class="btn-site">Checkout</a>
            </div>
        </div>
        <div class="st-shoping">
            <div class="box-not-shop">
                <figure>
                    <img src="images/start-shopping.svg" alt="" />
                    <p>Your Shopping Cart Is Empty</p>
                </figure>
                <a class="btn-site"><span>START SHOPING</span></a>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        new WOW().init();
    </script>
@stop

