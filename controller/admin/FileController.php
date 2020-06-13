<?php


class FileController
{

    public function view()
    {
        require_once("view/admin/file/view.php");
    }

    public function create()
    {
        require_once("view/admin/file/create.php");
    }

    public function edit()
    {
        require_once("view/admin/file/edit.php");
    }

    public function delete()
    {

    }

}