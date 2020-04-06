<?php

$Route = [];

/**Homepage routes*/
$Route['/'] = "controller/ShopController/homepage";
$Route[''] = "controller/ShopController/homepage";

/** backend */
//dashboard
$Route['/admin'] = "controller/ShopController/admin";
//products
$Route['/createProduct'] = "controller/ProductsController/insert";

//category


//front-end test
$Route['/testFrontend'] = "controller/Test/testFrontend";

//front-end test
$Route['/testBackend'] = "controller/Test/testBackend";