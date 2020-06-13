<?php


class OrderController
{

    public function view()
    {
        require_once("view/admin/order/view.php");
    }

    public function create()
    {
        require_once("view/admin/order/create.php");
    }

    public function edit()
    {
        require_once("view/admin/order/edit.php");
    }

    public function delete()
    {

    }

}

?>