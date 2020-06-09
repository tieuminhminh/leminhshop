<?php


class CheckoutController
{

    public function signIn()
    {
        require_once ("view/shop/cart/checkoutSigIn.php");
}
    public function shipping()
    {
        require_once ("view/shop/cart/checkoutShipping.php");
    }
    public function address()
    {
        require_once ("view/shop/cart/checkoutAddress.php");
    }

    public function payment()
    {
        require_once ("view/shop/cart/payment.php");
}

    public function view()
    {
        require_once ("view/shop/cart/viewCart.php");
}
}