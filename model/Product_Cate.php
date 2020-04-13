<?php


/**
 * Class Product
 */
class Product extends Model
{


    public function create($condition)
    {

        $database = new Database();

        $name = $condition["name"];
        $description = strip_tags($condition["description"]);
        $prices = $condition["prices"];
        $colors = $condition["colors"];
        $sizes = $condition["sizes"];
        $image = $condition["image"];
        $data = " \"$name\",\"$description\",\"$prices\",\"$colors\",\"$sizes\",\"$image\"";

        $sql = "INSERT INTO `products`(`name`, `description`, `prices`, `colors`, `sizes`, `image`) VALUES ($data)";

        $database->execute($sql);

        return $database->insert_id();

    }


}

