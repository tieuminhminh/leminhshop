<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="view/shop/lib/img/favicon.png">

    <!-- FONTS
    ============================================ -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>

    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/animate.css">

    <!-- FANCYBOX CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/jquery.bxslider.css">

    <!-- MEANMENU CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/owl.theme.css">

    <!-- BOOTSTRAP CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/font-awesome.min.css">

    <!-- NORMALIZE CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/normalize.css">

    <!-- MAIN CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/main.css">

    <!-- STYLE CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/style.css">

    <!-- RESPONSIVE CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/responsive.css">

    <!-- IE CSS
    ============================================ -->
    <link rel="stylesheet" href="view/shop/lib/css/ie.css">

    <!-- MODERNIZR JS
    ============================================ -->
    <script src="view/shop/lib/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>

<!-- HEADER-TOP START -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- HEADER-LEFT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-left-menu">
                    <div class="welcome-info">
                        Welcome <span>User</span>
                    </div>
                    <div class="currenty-converter">
                        <form method="post" action="#" id="currency-set">
                            <div class="current-currency">
                                <span class="cur-label">Currency : </span><strong>USD</strong>
                            </div>
                            <ul class="currency-list currency-toogle">
                                <li>
                                    <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                </li>
                                <li>
                                    <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="selected-language">
                        <div class="current-lang">
                            <span class="current-lang-label">Language : </span><strong>English</strong>
                        </div>
                        <ul class="languages-choose language-toogle">
                            <li>
                                <a href="#" title="English">
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Français (French)">
                                    <span>Français</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- HEADER-LEFT-MENU END -->
            <!-- HEADER-RIGHT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline">
                            <li><a href="view/shop/cart/payment.php">Check Out</a></li>
                            <li><a href="view/shop/wishlist/wishlist.php">Wishlist</a></li>
                            <li><a href="view/shop/account/myAccount.php">My Account</a></li>
                            <li><a href="view/shop/cart/viewCart.php">My Cart</a></li>
                            <li><a href="view/shop/account/login.php">Sign in</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="<?=BASE_URL?>"><img src="view/shop/lib/img/logo.png" alt="leminhshop logo"></a>
                </div>
                <!-- LOGO END -->
                <!-- HEADER-RIGHT-CALLUS START -->
                <div class="header-right-callus">
                    <h3>call us free</h3>
                    <span>038- 764 8787</span>
                </div>
                <!-- HEADER-RIGHT-CALLUS END -->
            </div>
        </div>
    </div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                <div class="shopping-cart-out pull-right">
                    <div class="shopping-cart">
                        <a class="shop-link" href="view/shop/cart/viewCart.php" title="View my shopping cart">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                            <b>My Cart</b>
                            <span class="ajax-cart-quantity">2</span>
                        </a>
                        <div class="shipping-cart-overly">
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="#"><img src="view/shop/lib/img/shopping-image.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
                                    <span class="pro-quality"><a href="#">S,Black</a></span>
                                    <p>$22.95</p>
                                </div>
                            </div>
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="#"><img src="view/shop/lib/img/shopping-image2.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
                                    <span class="pro-quality"><a href="#">S,Gary</a></span>
                                    <p>$19.95</p>
                                </div>
                            </div>
                            <div class="shipping-total-bill">
                                <div class="cart-prices">
                                    <span class="shipping-cost">$2.00</span>
                                    <span>Shipping</span>
                                </div>
                                <div class="total-shipping-prices">
                                    <span class="shipping-total">$24.95</span>
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="shipping-checkout-btn">
                                <a href="view/shop/cart/payment.php">Check out <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li class="active"><a href="<?=BASE_URL?>">Home</a>
                            </li>
                            <li>
                                <a href="<?=BASE_URL?>/viewCategory">Women</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="<?=BASE_URL?>/viewCategory">T-shirts</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">clothing</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">Product</a>
                                            <ul>
                                                <li><a href="<?=BASE_URL?>/viewCategory">T-shirts</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">clothing</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">Watch</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="<?=BASE_URL?>/viewCategory">Men</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <ul>
                                                <li><a href="<?=BASE_URL?>/viewCategory">T-shirts</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">clothing</a></li>
                                                <li><a href="<?=BASE_URL?>/viewCategory">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                           
                            <li><a href="<?=BASE_URL?>/contactUs">Contact us</a></li>
                            <li><a href="<?=BASE_URL?>/aboutUs">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MAINMENU END -->
        </div>
    
    </div>
</header>
<!-- MAIN-MENU-AREA END -->