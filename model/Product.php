<?php
include_once "database/Database.php";

class Product
{

    public function create($condition)
    {
        $name = $condition["name"];
        $description = $condition["description"];
        $prices = $condition["prices"];
        $colors = $condition["colors"];
        $sizes = $condition["sizes"];
        $image = $condition["image"];
$data = " \"$name\",\"$description\",\"$prices\",\"$colors\",\"$sizes\",\"$image\"";
        $database = new Database();
        $sql = "INSERT INTO `products`(`name`, `description`, `prices`, `colors`, `sizes`, `image`) VALUES ($data)";
        $database->execute($sql);


    }


}

