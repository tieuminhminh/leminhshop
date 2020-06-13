<?php


class RoleController
{

    public function view()
    {
        require_once("view/admin/role/view.php");
    }

    public function create()
    {
        require_once("view/admin/role/create.php");
    }

    public function edit()
    {
        require_once("view/admin/role/edit.php");
    }

    public function delete()
    {

    }

}