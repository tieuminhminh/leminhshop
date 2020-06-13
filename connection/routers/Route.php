<?php

$Route = [];

/**Homepage routes*/
$Route['/'] = "controller/ShopController/homepage";
$Route[''] = "controller/ShopController/homepage";

/** admin sites*/

//dashboard

$Route['/admin'] = "controller/ShopController/admin";

//user
$Route['/adminViewUser'] = "controller/admin/UserController/view";
$Route['/adminCreateUser'] = "controller/admin/UserController/create";
$Route['/adminEditUser'] = "controller/admin/UserController/edit";

//role
$Route['/adminViewRole'] = "controller/admin/RoleController/view";
$Route['/adminCreateRole'] = "controller/admin/RoleController/create";
$Route['/adminEditRole'] = "controller/admin/RoleController/edit";

//product

$Route['/adminViewProduct'] = "controller/admin/ProductController/view";
$Route['/adminCreateProduct'] = "controller/admin/ProductController/create";
$Route['/adminEditProduct'] = "controller/admin/ProductController/edit";

//order

$Route['/adminViewOrder'] = "controller/admin/OrderController/view";
$Route['/adminCreateOrder'] = "controller/admin/OrderController/create";
$Route['/adminEditOrder'] = "controller/admin/OrderController/edit";

//post
$Route['/adminViewPost'] = "controller/admin/PostController/view";
$Route['/adminCreatePost'] = "controller/admin/PostController/create";
$Route['/adminEditPost'] = "controller/admin/PostController/edit";

//category
$Route['/adminViewCategory'] = "controller/admin/CategoryController/view";
$Route['/adminCreateCategory'] = "controller/admin/CategoryController/create";
$Route['/adminEditCategory'] = "controller/admin/CategoryController/edit";

// file
$Route['/adminViewFile'] = "controller/admin/FileController/view";
$Route['/adminCreateFile'] = "controller/admin/FileController/create";
$Route['/adminEditFile'] = "controller/FileController/edit";

//account
$Route['/adminEditAccount'] = "controller/admin/AccountController/edit";


/** user sites */
//cart
$Route['/viewCart'] = "controller/CheckoutController/view";
$Route['/checkoutAddress'] = "controller/CheckoutController/address";
$Route['/checkoutShipping'] = "controller/CheckoutController/shipping";
$Route['/checkoutSignin'] = "controller/CheckoutController/signIn";
$Route['/checkoutPayment'] = "controller/CheckoutController/payment";
$Route['/wishlist'] = "controller/WishlistController/view";

//authentication
$Route['/registration'] = "controller/AuthenticationController/register";
$Route['/login'] = "controller/AuthenticationController/login";
$Route['/myAccount'] = "controller/AuthenticationController/myAccount";
$Route['/forgotPassword'] = "controller/AuthenticationController/forgotPassword";
//category

$Route['/viewCategory'] = "controller/CategoriesController/view";

//static pag

$Route['/contactUs'] = "controller/StaticPage/contactUs";
$Route['/aboutUs'] = "controller/StaticPage/aboutUs";

//products
$Route['/allProduct'] = "controller/ProductsController/all";
$Route['/detailProduct'] = "controller/ProductsController/detail";


/** Error Page */
$Route['/404'] = "controller/ShopController/_404";