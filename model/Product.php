<?php

/**
 * Class Product
 */
class Product extends Model
{

    private $result;

    public function __construct()
    {

    }

    public function fetchAll()
    {
        $data = [];
        $database = new Database();

        $sql = "SELECT * FROM `products`";
        $this->result = $database->execute($sql);
        if (!empty($this->result))
            while ($row = $this->result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $row;
            }
        return $data;

    }

    public function fetchHasCondition($id)
    {

        $database = new Database();

        $sql = "SELECT * FROM `products` WHERE id = $id";
        $this->result = $database->execute($sql);
        if (!empty($this->result))

            return $this->result->fetch_array(MYSQLI_ASSOC);


    }



    public function create($condition)
    {

        $database = new Database();
        if (!empty($condition))
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

    public function update($condition,$id)
    {
        $database = new Database();
        if (!empty($condition))
            $name = $condition["name"];
        $description = strip_tags($condition["description"]);
        $prices = $condition["prices"];
        $colors = $condition["colors"];
        $sizes = $condition["sizes"];
        $image = $condition["image"];

        $column = "`name`= '$name',`description`='$description',`prices`=$prices,`colors`='$colors',`sizes`='$sizes',`image`='$image'";

        $sql = "UPDATE `products` SET $column WHERE id = $id";
        $database->execute($sql);

        return $database->insert_id();
    }

}

