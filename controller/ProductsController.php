<?php
<<<<<<< HEAD
require_once "model/Model.php";
=======

>>>>>>> refs/remotes/origin/master

class ProductsController
{

    public function index()
    {

    }

    public function create()
    {
<<<<<<< HEAD
        $model = new Model();
        $products = new Product();
        $products_cate = new Product_Cate();


        if (!empty($_POST["name"])) {

            $data = [
                "name" => $_POST["name"],
                "description" => $_POST["description"],
                "category" => $_POST["category"],
                "prices" => $_POST["prices"],
                "colors" => $_POST["colors"],
                "sizes" => $_POST["sizes"],
                "image" => $model->validateUploadFile()
            ];


            $inserted_id = $products->create($data);
            $product_id = (int) $inserted_id;
            $cate_id = (int) $data["category"];

            $products_cate->create($product_id,$cate_id);

        }

        require_once "view/admin/product/create.php";

=======
>>>>>>> refs/remotes/origin/master

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}