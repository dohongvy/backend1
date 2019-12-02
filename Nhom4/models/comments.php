<?php
class Comments extends Db{
    
    public function inComment($content, $product_ID, $username)
    {
        $sql = self::$connection->query("INSERT INTO `comment`( `content`, `product_ID`, `username`) VALUES ('$content','$product_ID','$username')");
    }
    public function getCommentById($id){
        $sql = self::$connection->prepare("SELECT * FROM `comment` WHERE `product_ID` = ?");
        $sql->bind_param("i", $id);
        return $this->select($sql);
    }
   
}




