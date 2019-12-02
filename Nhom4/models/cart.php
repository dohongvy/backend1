<?php
class Cart extends Db{
    
    public function addCart($username, $product_ID, $qty)
    {
        $sql = self::$connection->query("INSERT INTO `cart`(`id_product`, `username`, `qty`) VALUES ('$product_ID', '$username', '$qty' )");
    }
}




