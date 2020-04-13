<?php


/**
 * Class Product
 */
class Product_Cate extends Model
{


    public function create($product_id, $category_id)
    {

        $database = new Database();


        $sql = "INSERT INTO `products_cate`(`products_id`, `categories_id`) VALUES ($product_id,$category_id)";

        return $database->execute($sql);


    }


}

