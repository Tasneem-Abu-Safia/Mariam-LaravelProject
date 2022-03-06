@extends('layout.publicSite.CommonPage')
@section('news')
    <li><a href='{{URL('news')}}'rel="m_PageScroll2id">news</a></li>
@stop
@section('Hnews')
    <li><a href='{{URL('news')}}'rel="m_PageScroll2id">news</a></li>
@stop
@section('header')

    <li class="click-cart"><a class="toggle-nav"><img src="{{asset('/images/cart-icon.svg')}}" /><span class="number-site">0</span></a></li>
    <li class="click-profile"><a href='{{URL('profile')}}'><img src="{{asset('/images/team1.png')}}" alt="" /></a></li>
@stop
@section('content')

    <section class="section_site_page">
        <div class="container">
            <div class="flex-profile">
                <div class="tabs-profile">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="Profile-tab" data-toggle="tab" href="#Profile" role="tab" aria-controls="Profile" aria-selected="true"><figure><img src="images/icon-user.svg" /></figure><span>Profile</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Courses-tab" data-toggle="tab" href="#Courses" role="tab" aria-controls="Courses" aria-selected="false"><figure><img src="images/icon-course.svg" /></figure><span>Courses</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Orders-tab" data-toggle="tab" href="#Orders" role="tab" aria-controls="Orders" aria-selected="false"><figure><img src="images/icon-order.svg" /></figure><span>Orders</span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href=""><figure><img src="{{asset('images/logout.svg')}}" /></figure><span>Sign Out</span></a>
                        </li>
                    </ul>
                </div>
                <div class="content-profile">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                            <div class="data-profile">
                                <figure>
                                    <img src="{{asset('images/team1.png')}}" alt="" />
                                </figure>
                                <p class="ph-main">Personal Information :</p>
                                <ul class="list-data">
                                    <li><p>First Name :</p><span>D. Michael</span></li>
                                    <li><p>Last Name :</p><span>Rachelle</span></li>
                                    <li><p>Phone :</p><span>416-875-7523</span></li>
                                </ul>
                                <p class="ph-main">Account Information :</p>
                                <ul class="list-data">
                                    <li><p>Email Address :</p><span>rachelle.d@gmail.com</span></li>
                                    <li><p>City :</p><span>Dubai</span></li>
                                    <li><p>Address :</p><span>Dubai - King Str</span></li>
                                    <li><p>Password :</p><span>***********</span></li>
                                </ul>
                                <div class="option-data">
                                    <a class="btn-site" data-toggle="modal" data-target="#modalEdit"><span>Edit</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Courses" role="tabpanel" aria-labelledby="Courses-tab">
                            <div class="content-courses">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box-course item-courses">
                                            <figure>
                                                <img src="{{asset('images/course1.png')}}" alt="" />
                                            </figure>
                                            <p class="name-course">Biology & The Scientific Method</p>
                                            <div class="sec-title">
                                                <small>Start on: 30 Jan 2020</small>
                                                <span>05 of 14 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-course item-courses">
                                            <figure>
                                                <img src="{{asset('images/course2.png')}}" alt="" />
                                            </figure>
                                            <p class="name-course">IT & Cloud Computing</p>
                                            <div class="sec-title">
                                                <small>Start on: 30 Jan 2020</small>
                                                <span>05 of 14 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-course item-courses">
                                            <figure>
                                                <img src="{{asset('images/course3.png')}}" alt="" />
                                            </figure>
                                            <p class="name-course">IT & Cloud Computing</p>
                                            <div class="sec-title">
                                                <small>Start on: 30 Jan 2020</small>
                                                <span>05 of 14 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-course item-courses">
                                            <figure>
                                                <img src="{{asset('images/course4.png')}}" alt="" />
                                            </figure>
                                            <p class="name-course">Biology & The Scientific Method</p>
                                            <div class="sec-title">
                                                <small>Start on: 30 Jan 2020</small>
                                                <span>05 of 14 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Orders" role="tabpanel" aria-labelledby="Orders-tab">
                            <div class="content-order">
                                <ul class="list-order">
                                    <li>
                                        <div class="colu-right">
                                            <p>Order ID : <a class="item-order">#544-543-876</a></p>
                                            <a class="show-order" data-toggle="modal" data-target="#modalOrder"><i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="option-order">
                                                <span class="complete">Complete</span>
                                                <ul>
                                                    <li class="price-order"><small><i class="fa fa-dollar"></i> 33.00 K.D</small></li>
                                                    <li class="date-order"><time><i class="fa fa-calendar-o"></i> 16/02/2021</time></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="colu-right">
                                            <p>Order ID : <a class="item-order">#544-543-876</a></p>
                                            <a class="show-order" data-toggle="modal" data-target="#modalOrder"><i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="option-order">
                                                <span class="delivery">Delivery</span>
                                                <ul>
                                                    <li class="price-order"><small><i class="fa fa-dollar"></i> 33.00 K.D</small></li>
                                                    <li class="date-order"><time><i class="fa fa-calendar-o"></i> 16/02/2021</time></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="colu-right">
                                            <p>Order ID : <a class="item-order">#544-543-876</a></p>
                                            <a class="show-order" data-toggle="modal" data-target="#modalOrder"><i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="option-order">
                                                <span class="Preparing">Preparing</span>
                                                <ul>
                                                    <li class="price-order"><small><i class="fa fa-dollar"></i> 33.00 K.D</small></li>
                                                    <li class="date-order"><time><i class="fa fa-calendar-o"></i> 16/02/2021</time></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="colu-right">
                                            <p>Order ID : <a class="item-order">#544-543-876</a></p>
                                            <a class="show-order" data-toggle="modal" data-target="#modalOrder"><i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="option-order">
                                                <span class="new">New</span>
                                                <ul>
                                                    <li class="price-order"><small><i class="fa fa-dollar"></i> 33.00 K.D</small></li>
                                                    <li class="date-order"><time><i class="fa fa-calendar-o"></i> 16/02/2021</time></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="colu-right">
                                            <p>Order ID : <a class="item-order">#544-543-876</a></p>
                                            <a class="show-order" data-toggle="modal" data-target="#modalOrder"><i class="zmdi zmdi-chevron-right"></i></a>
                                            <div class="option-order">
                                                <span class="new">New</span>
                                                <ul>
                                                    <li class="price-order"><small><i class="fa fa-dollar"></i> 33.00 K.D</small></li>
                                                    <li class="date-order"><time><i class="fa fa-calendar-o"></i> 16/02/2021</time></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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

    <div class="menu-edit-profile">
        <div class="head-asid">
            <img src="{{asset('images/logo.svg')}}" alt="" />
            <a class="edit-profile"><i class="zmdi zmdi-close"></i></a>
        </div>
        <div class="content-body">
            <div class="content-edit">
                <h2>Edit Profile</h2>
                <form class="form-edit form-checkout">
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" value="Ala Fsifes" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" value="ala.n.fsifes@gmail.com" />
                    </div>
                    <div class="form-group">
                        <label>Mobile :</label>
                        <div class="flex70">
                            <select class="form-control number-site">
                                <option>976</option>
                                <option>975</option>
                                <option>979</option>
                                <option>988</option>
                                <option>970</option>
                            </select>
                            <input type="text" class="form-control number-site" value="059528546" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" value="*********" />
                    </div>
                    <div class="form-group btn-auto">
                        <button class="btn-site"><span>Save</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="menu-change-password">
        <div class="head-asid">
            <img src="{{asset('images/logo.svg')}}" alt="" />
            <a class="change-password"><i class="zmdi zmdi-close"></i></a>
        </div>
        <div class="content-body">
            <div class="content-edit">
                <h2>Chang Password</h2>
                <form class="form-edit form-checkout">
                    <div class="form-group">
                        <label> Old Password :</label>
                        <input type="password" class="form-control" value="*********" />
                    </div>
                    <div class="form-group">
                        <label>New Password :</label>
                        <input type="password" class="form-control" value="*********" />
                    </div>
                    <div class="form-group">
                        <label>Confirm Password :</label>
                        <input type="password" class="form-control" value="*********" />
                    </div>
                    <div class="form-group btn-auto">
                        <button class="btn-site"><span>Save</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close"></i></button>
                </div>
                <div class="content-order">
                    <div class="id-order">
                        <p>Order ID : #444-543-876</p>
                        <span class="Preparing">Preparing</span>
                    </div>
                    <div class="data-order">
                        <p>Date : 12/03/2019</p>
                        <p>Phone Number  : +0000 000 0000</p>
                        <p>City  : Dubai</p>
                        <p>Address  : 149 OceanThemes St, Broughton Rd London, England</p>
                        <p class="amount-to">Total Amount : <span>SAR 430.40</span></p>
                    </div>
                    <div class="products-order">
                        <p>Products</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="cont-product">
                                    <figure>
                                        <img src="{{asset('images/product1.png')}}" alt="" />
                                    </figure>
                                    <div class="sec-title">
                                        <p>The Earth Ceramic Coffee Mug</p>
                                        <div class="sec-pro">
                                            <small>75 KWD</small>
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cont-product">
                                    <figure>
                                        <img src="{{asset('images/product2.png')}}" alt="" />
                                    </figure>
                                    <div class="sec-title">
                                        <p>Numeric Flashcard</p>
                                        <div class="sec-pro">
                                            <small>75 KWD</small>
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close"></i></button>
                </div>
                <div class="content-order">
                    <form class="">
                        <div class="flex50">
                            <div class="form-group">
                                <img src="{{asset('images/user.svg')}}" />
                                <input type="text" class="form-control" value="Ala" />
                            </div>
                            <div class="form-group">
                                <img src="{{asset('images/user.svg')}}" />
                                <input type="text" class="form-control" value="Fsifes" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        new WOW().init();
    </script>
@stop
