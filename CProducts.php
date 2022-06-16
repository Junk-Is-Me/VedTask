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
        return $this->connection->query('SELECT * FROM products WHERE visible = 0 ORDER BY date_create DESC LIMIT ' . $limit, PDO::FETCH_ASSOC)->fetchAll();
    }

    function hide($product_id)
    {
        return $this->connection->exec('UPDATE Products SET visible = 1 WHERE id = ' . $product_id);
    }

    function increment($product_id)
    {
        return $this->connection->exec('UPDATE Products SET quantitiy = +1 WHERE id = ' . $product_id);
    }

    function decrement($product_id)
    {
        return $this->connection->exec('UPDATE Products SET quantitiy = -1 WHERE id = ' . $product_id);
    }
}
