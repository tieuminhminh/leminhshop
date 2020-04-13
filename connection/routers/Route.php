<?php

$Route = [];

/**Homepage routes*/
$Route['/'] = "controller/ShopController/homepage";
$Route[''] = "controller/ShopController/homepage";

/** backend */
//dashboard
$Route['/admin'] = "controller/ShopController/admin";
//products
$Route['/createProduct'] = "controller/ProductsController/create";
//category


//front-end test
$Route['/testFrontend'] = "controller/Test/testFrontend";

//back-end test
$Route['/testBackend'] = "controller/Test/testBackend";