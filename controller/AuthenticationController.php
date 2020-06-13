<?php


class AuthenticationController
{

    public function register()
    {
        require_once ("view/admin/authentic/register.php");
    }

    public function login()
    {
        require_once ("view/admin/authentic/login.php");
}

    public function myAccount()
    {
        require_once ("view/shop/account/myAccount.php");
}

    public function forgotPassword()
    {
        require_once ("view/admin/authentic/forgotPassword.php");

}
}