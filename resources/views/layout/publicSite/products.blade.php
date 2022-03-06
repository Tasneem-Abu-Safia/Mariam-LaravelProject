@extends('layout.publicSite.CommonPage')

@section('blogs')
    <li><a href='{{URL('Blogs')}}' rel="m_PageScroll2id">Blogs</a></li>
@stop
@section('register')
    <li class="register"><a href='{{URL('Register')}}'>Register</a></li>
@stop
@section('Hblogs')
    <li><a href='{{URL('Blogs')}}' rel="m_PageScroll2id">Blogs</a></li>
@stop
@section('header')
    <li class="click-cart"><a class="toggle-nav"><img src="{{asset('/images/cart-icon.svg')}}" /><span class="number-site">0</span></a></li>
    <li class="click-profile"><a href='{{URL('profile')}}'><img src="{{asset('/images/team1.png')}}" alt="" /></a></li>
@stop
@section('content')
    <section class="section-head-page" style="background: url({{asset('images/bg-slide.png')}})">
        <div class="container">
            <div class="head-page">
                <h2>Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <form class="form-search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search By Product Name" />
                        <i class="zmdi zmdi-search"></i>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section-head-page-->

    <section class="section_site_page">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item-product">
                        <figure>
                            <img src="{{asset('images/product1.png')}}" alt="" />
                        </figure>
                        <p>The Earth Ceramic Coffee Mug </p>
                        <div class="sec-title">
                            <p>130.50 <strong>KWD</strong></p>
                            <a class="btn-site"><span>Add To Cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-product">
                        <figure>
                            <img src="{{asset('images/product2.png')}}" alt="" />
                        </figure>
                        <p>Short Love Stories </p>
                        <div class="sec-title">
                            <p>130.50 <strong>KWD</strong></p>
                            <a class="btn-site"><span>Add To Cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-product">
                        <figure>
                            <img src="{{asset('images/product3.png')}}" alt="" />
                        </figure>
                        <p>Time Management </p>
                        <div class="sec-title">
                            <p>130.50 <strong>KWD</strong></p>
                            <a class="btn-site"><span>Add To Cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-product">
                        <figure>
                            <img src="{{asset('images/product4.png')}}" alt="" />
                        </figure>
                        <p>Time Management</p>
                        <div class="sec-title">
                            <p>130.50 <strong>KWD</strong></p>
                            <a class="btn-site"><span>Add To Cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-product">
                        <figure>
                            <img src="{{asset('images/product1.png')}}" alt="" />
                        </figure>
                        <p>The Earth Ceramic Coffee Mug </p>
                        <div class="sec-title">
                            <p>130.50 <strong>KWD</strong></p>
                            <a class="btn-site"><span>Add To Cart</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section_home-->


    <div class="cart-menu">
        <div class="head-cart">
            <a href="#" class="toggle-nav"><i class="zmdi zmdi-close"></i></a>
            <p>My Cart</p>
        </div>
        <div class="body-cart">
            <div class="list-cart">
                <div class="box-cart">
                    <figure>
                        <img src="{{asset('images/product1.png')}}" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>The Earth Ceramic Coffee Mug</p>
                        <span>75 KWD</span>
                    </div>
                    <div class="count-cart">
                        <a class="remove-cart"><i class="fa fa-trash"></i></a>
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-cart">
                    <figure>
                        <img src="{{asset('images/product2.png')}}" alt="" />
                    </figure>
                    <div class="sec-title">
                        <p>Numeric Flashcard</p>
                        <span>199 KWD</span>
                    </div>
                    <div class="count-cart">
                        <a class="remove-cart"><i class="fa fa-trash"></i></a>
                        <div class="quantity_block">
                            <div class="quantity">
                                <div class="btn button-count inc jsQuantityIncrease">
                                    <i class="zmdi zmdi-plus"></i>
                                </div>
                                <input type="text" name="count-quat1" class="count-quat" value="1" min="1" max="1000">
                                <div class="btn button-count dec jsQuantityDecrease disabled" minimum="1">
                                    <i class="zmdi zmdi-minus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-cart">
                <div class="title-ch">
                    <p>Total:</p>
                    <strong>280 KWD</strong>
                </div>
                <a class="btn-site">Checkout</a>
            </div>
        </div>
        <div class="st-shoping hidden">
            <div class="box-not-shop">
                <figure>
                    <img src="{{asset('images/empty-cart.svg')}}" alt="" />
                </figure>
                <div class="sec-title">
                    <h5>Whoops!</h5>
                    <p>Your cart is empty now. Check our products and buy it.</p>
                </div>
                <a class="btn-site"><span>Go To Products</span></a>
            </div>
        </div>
    </div>


@stop
@section('script')


    <script>
        new WOW().init();
    </script>

@stop
