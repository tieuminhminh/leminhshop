<?php

class ProductsController
{

    public function all()
    {
   require_once ("view/shop/product/viewAllProduct.php");
  }

    public function detail()
    {
        require_once ("view/shop/product/viewDetailProduct.php");
   }

}