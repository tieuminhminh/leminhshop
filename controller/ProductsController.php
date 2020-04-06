<?php
require_once "model/Model.php";
require_once "model/Product.php";

class ProductsController
{

    public function index()
    {

    }

    public function insert()
    {
        $model = new Model();
        $products = new Product();

        if (!empty($_POST["name"])) {

            $data = [
                "name" => $_POST["name"],
                "description" => $_POST["description"],
                "prices" => $_POST["prices"],
                "colors" => $_POST["colors"],
                "sizes" => $_POST["sizes"],
                "image" => $model->validateUploadFile()
            ];

            $products->create($data);

        }
        require_once "view/admin/product/create.php";


    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}