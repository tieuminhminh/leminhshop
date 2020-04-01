<?php


class ShopController
{

    public function homePage()
    {
        require_once "view/shop/layout/main.php";
    }

    public function admin()
    {
        require_once "view/admin/layout/main.php";
    }
}