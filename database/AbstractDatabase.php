<?php

include_once 'connection/Connection.php';

abstract class AbstractDatabase
{
    /**
     * @var Connection
     */
    protected $connection;
    private $result;

    /**
     * AbstractDatabase constructor.
     */
    public function __construct()
    {
        $connection = new Connection();
        $this->connection = $connection;
    }

    /**
     * @param $sql
     * @return bool|mysqli_result
     */
    public function execute($sql)
    {
        $this->result = $this->connection->getConn()->query($sql);
        return $this->result;
    }

    /**
     * @param $tableName
     * @return array|AbstractDatabase
     */
    public function fetch($tableName)
    {
        $data = [];
        $sql = "SELECT * FROM $tableName";
        $this->result = $this->execute($sql);
        if ($this->result === false) {
            return [];
        }
        while ($row = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        return $data;

    }

    /**
     * @param $tableName
     * @param $condition
     * @return array
     */
    public function fetchHasCondition($tableName, $condition)
    {
        $data = [];
        $sql = "SELECT * FROM $tableName WHERE $condition";

        $this->result = $this->execute($sql);
        if ($this->result === false) {
            return [];
        }
        while ($row = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    /**
     * @param $tableName
     * @param $data
     * @return int|string
     */
    public function insert($tableName, $data)
    {
        $column_name = $data['columnName'];
        $condition = $data['condition'];
        $sql = "INSERT INTO $tableName ($column_name) VALUES ($condition)";
        $this->result = $this->execute($sql);

        return $this->connection->getConn()->insert_id;

    }

    /**
     * @param $tableName
     * @param $data
     * @param $condition
     * @return array|bool|mysqli_result
     */
    public function update($tableName, $data, $condition)
    {
        $column_name = $data['columnName'];
        $update_data = $data['condition'];

        $sql = "UPDATE $tableName SET $column_name = $update_data  WHERE id = $condition";
        $this->result = $this->execute($sql);

        if (!isset($this->result) || $this->result == null)
            return [];
        return $this->result;

    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteById($id)
    {
        $condition = "id = $id";

        $sql = "DELETE FROM $this->tableName WHERE $condition";

        $result = $this->execute($sql);

        if (!isset($result) || $result == null)
            return false;

        return true;
    }


}