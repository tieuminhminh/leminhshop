<?php

$Route = [];

/**Homepage routes*/
$Route['/'] = "controller/ShopController/homepage";
$Route[''] = "controller/ShopController/homepage";

/** admin sites*/

//dashboard

$Route['/admin'] = "controller/ShopController/admin";

//products

$Route['/adminViewProduct'] = "controller/ProductsController/index";
$Route['/adminCreateProduct'] = "controller/ProductsController/create";
$Route['/adminUpdateProduct'] = "controller/ProductsController/update";

/** user sites */
//cart

$Route['/checkoutAddress'] = "controller/CheckoutController/address";
$Route['/checkoutShipping'] = "controller/CheckoutController/shipping";
$Route['/checkoutSignin'] = "controller/CheckoutController/signIn";
$Route['/checkoutPayment'] = "controller/CheckoutController/payment";
//category

$Route['/viewCategory'] = "controller/CategoriesController/view";

//static page

$Route['/contactUs'] = "controller/StaticPage/contactUs";
$Route['/aboutUs'] = "controller/StaticPage/aboutUs";
