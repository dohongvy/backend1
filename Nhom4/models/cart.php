<?php
class Cart extends Db{
    
    public function addBill($username, $date, $price_total)
    {
        $sql = self::$connection->query("INSERT INTO `bill_cart`( `username`, `date`, `price_total`) 
        VALUES ('$username','$date','$price_total')");
    }

    public function getId_Bill(){
        $sql = self::$connection->prepare("SELECT `ID_Bill` FROM `bill_cart` ORDER BY `ID_Bill` DESC limit 1");
        return $this->select($sql);
    }

    public function addProductInCart($ID_Bill, $name_product, $qty)
    {
        $sql = self::$connection->query("INSERT INTO `ware`(`ID_Bill`, `name_product`, `qty`) 
        VALUES ('$ID_Bill','$name_product','$qty')");
    }
}




