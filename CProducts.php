<?php

class CProducts
{
    public $connection;

    function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=vedita', username: 'root', password: '');
    }

    function getProducts($limit)
    {
        $prep = $this->connection->prepare('SELECT * FROM products WHERE visible = 0 ORDER BY date_create DESC LIMIT :limit');
        $prep->bindParam(':limit', $limit, PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }

    function hide($product_id)
    {

        $prep = $this->connection->prepare('UPDATE Products SET visible = 1 WHERE id = :product_id');
        $prep->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $prep->execute();
    }

    function increment($product_id)
    {
        $prep =  $this->connection->prepare('UPDATE Products SET product_quantity = product_quantity +1 WHERE id = :product_id');
        $prep->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $prep->execute();
        $prep = $this->connection->prepare('SELECT * FROM products WHERE id = :product_id');
        $prep->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch(PDO::FETCH_ASSOC);

        //return $this->connection->query('SELECT * FROM products WHERE id =' . $product_id, PDO::FETCH_ASSOC)->fetch();
    }


    function decrement($product_id)

    {
        $prep =  $this->connection->prepare('UPDATE Products SET product_quantity = product_quantity -1 WHERE id = :product_id');
        $prep->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $prep->execute();
        $prep = $this->connection->prepare('SELECT * FROM products WHERE id = :product_id');
        $prep->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch(PDO::FETCH_ASSOC);
    }
}
