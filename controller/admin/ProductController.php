<?php


class UserController
{

    public function view()
    {
        require_once("view/admin/user/view.php");
    }

    public function create()
    {
        require_once("view/admin/user/create.php");
    }

    public function edit()
    {
        require_once("view/admin/user/edit.php");
    }

    public function delete()
    {

    }

}

?>