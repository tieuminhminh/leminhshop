<?php


class PostController
{

    public function view()
    {
        require_once("view/admin/post/view.php");
    }

    public function create()
    {
        require_once("view/admin/post/create.php");
    }

    public function edit()
    {
        require_once("view/admin/post/edit.php");
    }

    public function delete()
    {

    }

}

?>