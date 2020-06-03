<?php
require_once "model/Model.php";

class ProductsController
{

    public function index()
    {
        $products = new Product();
        $data = $products->fetchAll();
        if (!empty($data)) {
            require_once "view/admin/product/view.php";
        }
        echo "there is no products";
    }

    public function create()
    {
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
            $product_id = (int)$inserted_id;
            $cate_id = (int)$data["category"];

            $products_cate->create($product_id, $cate_id);

        }

        require_once "view/admin/product/create.php";


    }

    public function update()
    {
        $products = new Product();
        $products_cate = new Product_Cate();

        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $data = $products->fetchHasCondition($id);

            if (!empty($_POST['name'])) {

                $data = [
                    "name" => $_POST["name"],
                    "description" => $_POST["description"],
                    "category" => $_POST["category"],
                    "prices" => $_POST["prices"],
                    "colors" => $_POST["colors"],
                    "sizes" => $_POST["sizes"],
                ];

                $return_id = $products->update($data, $id);

                $data = $products->fetchHasCondition($return_id);
            }
        }
        require_once "view/admin/product/edit.php";
    }


    public function delete()
    {

    }

}