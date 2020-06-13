<?php


class AuthenticationController
{

    public function register()
    {
        require_once ("view/shop/account/registration.php");
    }

    public function login()
    {
        require_once ("view/shop/account/login.php");
}

    public function myAccount()
    {
        require_once ("view/shop/account/myAccount.php");
}

}