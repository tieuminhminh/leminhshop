<?php


class ProductController
{

    public function view()
    {
        require_once("view/admin/product/view.php");
    }

    public function create()
    {
        require_once("view/admin/product/create.php");
    }

    public function edit()
    {
        require_once("view/admin/product/edit.php");
    }

    public function delete()
    {

    }

}

?>