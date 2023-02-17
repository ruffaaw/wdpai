<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Cart.php';

class CartRepository extends Repository
{
    public function insertIntoCart($id_user, $id_product)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO cart (id_user, id_product) VALUES (?, ?)
        ');
        $stmt->execute([$id_user,$id_product]);
    }

    public function getCart()
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT products.name, products.price
            FROM cart JOIN products ON cart.id_product = products.id
            WHERE cart.id_user = :userID
        ');
        $stmt->bindParam(':userID',$_SESSION['user_id'] , PDO::PARAM_STR);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        return $result;
    }
}