@extends('layout.publicSite.CommonPage')

@section('blogs')
    <li ><a href='{{URL('Blogs')}}' rel="m_PageScroll2id">Blogs</a></li>
@stop
@section('news')
    <li><a href='{{URL('news')}}' rel="m_PageScroll2id">news</a></li>
@stop
@section('register')
    <li class="register"><a href='{{URL('Register')}}'>Register</a></li>
@stop
@section('Hblogs')
    <li><a href='{{URL('Blogs')}}' rel="m_PageScroll2id">Blogs</a></li>
@stop
@section('header')
    <li class="click-cart"><a class="toggle-nav"><img src="{{asset('/images/cart-icon.svg')}}" /><span class="number-site">0</span></a></li>
    <li class="click-profile"><a href="profile.html"><img src="{{asset('/images/team1.png')}}" alt="" /></a></li>
@stop
@section('content')

    <section class="section_site_page">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form class="form-checkout">
                        <div class="data-checkout">
                            <p><span>1</span> My Contact Details</p>
                            <div class="flex50">
                                <div class="form-group">
                                    <img src="{{asset('images/user.svg')}}" alt="" />
                                    <input type="text" class="form-control" placeholder="First Name" />
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('images/user.svg')}}" alt="" />
                                    <input type="text" class="form-control" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="{{asset('images/email.svg')}}" alt="" />
                                <input type="email" class="form-control" placeholder="username@gmile.com" />
                            </div>
                            <div class="flex80">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>+976</option>
                                        <option>+976</option>
                                        <option>+976</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="000 000 0000" />
                                </div>
                            </div>
                        </div>
                        <div class="data-checkout">
                            <p><span>2</span> Deliver To</p>
                            <div class="flex50">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>City</option>
                                        <option>Jaddah</option>
                                        <option>Makka</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Building Number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Address" />
                            </div>
                        </div>
                        <div class="data-checkout">
                            <p><span>3</span> Discount Code</p>
                            <div class="flex70">
                                <div class="form-group">
                                    <img src="{{asset('images/Promo-code.svg')}}" />
                                    <input type="email" class="form-control" placeholder="Promo code" />
                                </div>
                                <div class="form-group">
                                    <button class="btn-site"><span>Apply</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="data-checkout">
                            <p><span>4</span> Choose Payment Method</p>
                            <div class="size-pro">
                                <div>
                                    <input data-image="" type="radio" id="PaymentMethod" checked="checked" name="PaymentMethod1" value="PaymentMethod1">
                                    <label for="PaymentMethod">
                                        <span class="colorId">Electronic</span>
                                    </label>
                                </div>
                                <div>
                                    <input data-image="" type="radio" id="PaymentMethod1" name="PaymentMethod1" value="PaymentMethod1">
                                    <label for="PaymentMethod1">
                                        <span class="colorId">Cash</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="side-product">
                        <p>Order Details</p>
                        <div class="list-prou">
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
                        <ul class="total-che">
                            <li>
                                <p>Subtottal</p>
                                <span>600 KWD</span>
                            </li>
                            <li>
                                <p>Shipping</p>
                                <span>10 KWD</span>
                            </li>
                            <li>
                                <p>Tax</p>
                                <span>3.00 KWD</span>
                            </li>
                            <li>
                                <p>Total</p>
                                <span>432 KWD</span>
                            </li>
                            <li>
                                <p>Discount</p>
                                <span>20 KWD</span>
                            </li>
                            <li class="total-amount">
                                <p>Total Amount</p>
                                <span>SAR 400.00</span>
                            </li>
                        </ul>
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
