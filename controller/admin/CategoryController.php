<?php


class CategoryController
{

    public function view()
    {
        require_once("view/admin/category/view.php");
    }

    public function create()
    {
        require_once("view/admin/category/create.php");
    }

    public function edit()
    {
        require_once("view/admin/category/edit.php");
    }

    public function delete()
    {

    }

}