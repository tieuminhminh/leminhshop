<?php

$Route = [];

/**Homepage routes*/
$Route['/'] = "controller/ShopController/homepage";
$Route[''] = "controller/ShopController/homepage";

/** admin sites*/

//dashboard

$Route['/admin'] = "controller/ShopController/admin";

//users
$Route['/adminViewUser'] = "controller/admin/UserController/view";

//role
$Route['/adminViewRole'] = "controller/admin/RoleController/view";
//products

$Route['/adminViewProduct'] = "controller/ProductsController/view";
$Route['/adminCreateProduct'] = "controller/ProductsController/create";
$Route['/adminUpdateProduct'] = "controller/ProductsController/update";

//orders

$Route['/adminViewOrder'] = "controller/OrderController/index";
$Route['/adminCreateOrder'] = "controller/OrderController/create";
$Route['/adminEditOrder'] = "controller/OrderController/edit";

//post
$Route['/adminViewPost'] = "controller/PostController/index";
$Route['/adminCreatePost'] = "controller/PostController/create";
$Route['/adminEditPost'] = "controller/PostController/edit";


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
