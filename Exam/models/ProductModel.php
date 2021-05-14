<?php
class ProductModel {
    public $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function insertProduct($productName, $productLine, $price, $amount, $description)
    {
        $sql = "INSERT INTO product(productName, productLine, price, amount, description) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$productName );
        $statement->bindParam(2, $productLine);
        $statement->bindParam(3, $price);
        $statement->bindParam(4, $amount);
        $statement->bindParam(5, $description);
        return $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetch();

    }
    public function update($productName, $productLine, $price, $amount, $description, $id)
    {
        $sql = "UPDATE product SET productName = ?, productLine = ?, price = ?, amount = ?, description = ? WHERE id = ? ";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $productName);
        $statement->bindParam(2, $productLine);
        $statement->bindParam(3, $price);
        $statement->bindParam(4, $amount);
        $statement->bindParam(5, $description);
        $statement->bindParam(6, $id);
        return $statement->execute();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM product WHERE productName LIKE '%$keyword%'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}
