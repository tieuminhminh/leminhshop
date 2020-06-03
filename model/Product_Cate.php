<?php


/**
 * Class Product
 */
class Product_Cate extends Model
{
    private $result;


    public function create($product_id, $category_id)
    {

        $database = new Database();


        $sql = "INSERT INTO `products_cate`(`products_id`, `categories_id`) VALUES ($product_id,$category_id)";

        return $database->execute($sql);


    }

    public function fetchHasCondition($id)
    {

        $database = new Database();

        $sql = "SELECT * FROM `products_cate` WHERE products_id = $id";
        $this->result = $database->execute($sql);
        if (!empty($this->result))

            return $this->result->fetch_array(MYSQLI_ASSOC);


    }

}

