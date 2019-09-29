<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href={{ asset("assets/css/font-awesome.min.css") }} />
        <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap.css") }} />
        <link rel="stylesheet" type="text/css" href={{ asset("assets/css/style.css") }}>
        <link rel="stylesheet" type="text/css" href={{ asset("assets/css/magnific-popup.css") }}>
        <link rel="stylesheet" type="text/css" href={{ asset("assets/css/owl.carousel.css") }}>
        <link rel="shortcut icon" href={{ asset("assets/images/newlogo.png") }}>
        <link rel="apple-touch-icon" href={{ asset("assets/images/apple-touch-icon.png") }}>
        <link rel="apple-touch-icon" sizes="72x72" href={{ asset("assets/images/apple-touch-icon-72x72.png") }}>
        <link rel="apple-touch-icon" sizes="114x114" href={{ asset("assets/images/apple-touch-icon-114x114.png") }}>

        <style>
            @media (min-width: 768px) {
                .form-search .combobox-container,
                .form-inline .combobox-container {
                    display: inline-block;
                    margin-bottom: 0;
                    vertical-align: top;
                }
                .form-search .combobox-container .input-group-addon,
                .form-inline .combobox-container .input-group-addon {
                    width: auto;
                }
            }

            .combobox-selected .caret {
                display: none;
            }


            /* :not doesn't work in IE8 */

            .combobox-container:not(.combobox-selected) .glyphicon-remove {
                display: none;
            }

            .typeahead-long {
                max-height: 300px;
                overflow-y: auto;
            }

            .control-group.error .combobox-container .add-on {
                color: #B94A48;
                border-color: #B94A48;
            }

            .control-group.error .combobox-container .caret {
                border-top-color: #B94A48;
            }

            .control-group.warning .combobox-container .add-on {
                color: #C09853;
                border-color: #C09853;
            }

            .control-group.warning .combobox-container .caret {
                border-top-color: #C09853;
            }

            .control-group.success .combobox-container .add-on {
                color: #468847;
                border-color: #468847;
            }

            .control-group.success .combobox-container .caret {
                border-top-color: #468847;
            }
            .loader {
                position: absolute;
                top: calc(50% - 4em);
                left: calc(50% - 4em);
                width: 6em;
                height: 6em;
                border: 1.1em solid rgba(0, 0, 0, 0.2);
                border-left: 1.1em solid #000000;
                border-radius: 50%;
                animation: load8 1.1s infinite linear;
                transition: opacity 0.3s;
            }

            .loader--hide {
                opacity: 0;
            }

            @keyframes load8 {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
        </style>

    </head>
    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="header-top-left">
                            <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> <img src={{ asset("assets/images/lanka.png") }} alt="img"> Sri Lanka <span class="caret"></span> </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#"><img src={{ asset("assets/images/lanka.png") }} alt="img"> Sri Lanka</a></li>
                                    <li><a href="#"><img src="assets/images/English-icon.gif" alt="img"> English</a></li>
                                    <li><a href="#"><img src="assets/images/French-icon.gif" alt="img"> French</a></li>
                                    <li><a href="#"><img src="assets/images/German-icon.gif" alt="img"> German</a></li>
                                </ul>
                            </li>
                            <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"> USD <span class="caret"></span> </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">AUD</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="header-top-right text-right">
                            <li class="account"><a href="login.html">My Account</a></li>
                            <li class="sitemap"><a href="#">Sitemap</a></li>
                            <li class="cart"><a href="cart_page.html">My Cart</a></li>
                            @if(Sentinel::check())
                                <li class="cart"><a href="/logout">Logout</a></li>
                                <li class="cart" style="color: red">Hello {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</li>
                            @else
                                <li class="cart"><a href="/login">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-header mtb_20"> <a class="navbar-brand" href="index.html"> <img alt="HealthCared" src={{ asset("assets/images/newlogo.png") }}> </a> </div>
                    <div class="header-right pull-right mtb_50">
                        <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                        <div class="shopping-icon">
                            <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">Item's : <span class="cart-qty">02</span></div>
                            <div id="cart-dropdown" class="cart-menu collapse">
                                <ul>
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><a href="#"><img src={{ asset("assets/images/product/70x84.jpg") }} alt="iPod Classic" title="iPod Classic"></a></td>
                                                <td class="text-left product-name"><a href="#">MacBook Pro</a>
                                                    <span class="text-left price">$20.00</span>
                                                    <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                                </td>
                                                <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="#"><img src={{ asset("assets/images/product/70x84.jpg") }} alt="iPod Classic" title="iPod Classic"></a></td>
                                                <td class="text-left product-name"><a href="#">MacBook Pro</a>
                                                    <span class="text-left price">$20.00</span>
                                                    <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                                </td>
                                                <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Sub-Total</strong></td>
                                                <td class="text-right">$2,100.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                <td class="text-right">$2.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                                <td class="text-right">$20.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">$2,122.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <form action="cart_page.html">
                                            <input class="btn pull-left mt_10" value="View cart" type="submit">
                                        </form>
                                        <form action="checkout_page.html">
                                            <input class="btn pull-right mt_10" value="Checkout" type="submit">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-search pull-right">
                            <div class="search-overlay">
                                <!-- Close Icon -->
                                <a href="javascript:void(0)" class="search-overlay-close"></a>
                                <!-- End Close Icon -->
                                <div class="container">
                                    <!-- Search Form -->
                                    <form role="search" id="searchform" action="/search" method="get">
                                        <label class="h5 normal search-input-label">Enter keywords To Search Entire Store</label>
                                        <input value="" name="q" placeholder="Search here..." type="search">
                                        <button type="submit"></button>
                                    </form>
                                    <!-- End Search Form -->
                                </div>
                            </div>
                            <div class="header-search"> <a id="search-overlay-btn"></a> </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse js-navbar-collapse pull-right">
                        <ul id="menu" class="nav navbar-nav">
                            <li> <a href="/">Home</a></li>
                            <li> <a href="category_page.html">Shop</a></li>
                            <li> <a href="/mobile_shop">Create Ad</a></li>
                            <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">Women's</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">Man's</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li class="dropdown-header">Children's</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li><a href="#">Good Typography</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3">
                                        <ul>
                                            <li id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active"> <a href="#"><img src="assets/images/menu-banner1.jpg" class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                    <div class="item"> <a href="#"><img src="assets/images/menu-banner2.jpg" class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                    <div class="item"> <a href="#"><img src="assets/images/menu-banner3.jpg" class="img-responsive" alt="Banner1"></a></div>
                                                    <!-- End Item -->
                                                </div>
                                                <!-- End Carousel Inner -->
                                            </li>
                                            <!-- /.carousel -->
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="contact_us.html">Contact us</a></li>
                                    <li> <a href="cart_page.html">Cart</a></li>
                                    <li> <a href="checkout_page.html">Checkout</a></li>
                                    <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                                    <li> <a href="single_blog.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li> <a href="about.html">About us</a></li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="category">
                            <div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
                                <h4 class="category_text">Top category</h4>
                                <span class="i-bar"><i class="fa fa-bars"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="header-bottom-right offers">
                            <div class="marquee"><span><i class="fa fa-circle" aria-hidden="true"></i>It's Sexual Health Week!</span>
                                <span><i class="fa fa-circle" aria-hidden="true"></i>Our 5 Tips for a Healthy Summer</span>
                                <span><i class="fa fa-circle" aria-hidden="true"></i>Sugar health at risk?</span>
                                <span><i class="fa fa-circle" aria-hidden="true"></i>The Olay Ranges - What do they do?</span>
                                <span><i class="fa fa-circle" aria-hidden="true"></i>Body fat - what is it and why do we need it?</span>
                                <span><i class="fa fa-circle" aria-hidden="true"></i>Can a pillow help you to lose weight?</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div id="app">

        </div><br/>
        {{--<div class="loader">--}}
            {{----}}
        {{--</div>--}}
    <script src="/js/app.js"></script>
        <div class="footer pt_60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-block">
                        <div class="content_footercms_right">
                            <div class="footer-contact">
                                <div class="footer-logo mb_40"> <a href="index.html"> <img src={{ asset("assets/images/newlogo.png") }} alt="HealthCare"> </a> </div>
                                <ul>
                                    <li>B-14 Collins Street West Victoria 2386</li>
                                    <li>(+123) 456 789 - (+024) 666 888</li>
                                    <li>Contact@yourcompany.com</li>
                                </ul>
                                <div class="social_icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 footer-block">
                        <h6 class="footer-title ptb_20">Categories</h6>
                        <ul>
                            <li><a href="#">Medicines</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Mother & Baby</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Toiletries</a></li>
                            <li><a href="#">Skincare</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-block">
                        <h6 class="footer-title ptb_20">Information</h6>
                        <ul>
                            <li><a href="contact.html">Specials</a></li>
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-block">
                        <h6 class="footer-title ptb_20">My Account</h6>
                        <ul>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">My Credit Slips</a></li>
                            <li><a href="#">My Addresses</a></li>
                            <li><a href="#">My Personal Info</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="ptb_20">SIGN UP OUR NEWSLETTER</h6>
                        <p class="mt_10 mb_20">For get offers from our favorite brands & get 20% off for next </p>
                        <div class="form-group">
                            <input class="mb_20" type="text" placeholder="Enter Your Email Address">
                            <button class="btn" id="click">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt_60 ptb_10">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyright-part">@ 2017 All Rights Reserved HealthCare</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="payment-icon text-right">
                                <ul>
                                    <li><i class="fa fa-cc-paypal "></i></li>
                                    <li><i class="fa fa-cc-stripe"></i></li>
                                    <li><i class="fa fa-cc-visa"></i></li>
                                    <li><i class="fa fa-cc-discover"></i></li>
                                    <li><i class="fa fa-cc-mastercard"></i></li>
                                    <li><i class="fa fa-cc-amex"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
</html>
<script>
//    $(document).ready(function(){
//        // convert selects already on the page at dom load
//        $('select.form-control').combobox();
//
//        $('#it').click(function(e){
//            $('ul.dropdown-menu').toggle();
//        });
//
//    });
</script>
