<?php
class Manufacture extends Db{
    // phuong thuc lay len tat ca san pham
    public function getAllManufacture_ManuName(){
        $sql = self::$connection->prepare("SELECT * from manufactures");
        return $this->select($sql);
    }
    public function getManufactureByIdRight($manu_id){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE `manu_ID` = ?");
        $sql->bind_param("i", $manu_id);
        return $this->select($sql);
    }
    public function getManufactureById($manu_name){
        $sql = self::$connection->prepare("SELECT * FROM `products` JOIN manufactures
         on products.manu_ID = manufactures.manu_ID WHERE manufactures.manu_name like ?");
        $sql->bind_param("s", $manu_name);
        return $this->select($sql);
    }
    public function getManu(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures order by manu_ID desc");
        return $this->select($sql);
    }

    public function delete_manu($manu_id)
    {
        $sql = self::$connection->query("DELETE FROM `manufactures` WHERE `manu_ID` = '$manu_id'");
    }
    public function addNewManu($name, $image)
    {
        $sql = self::$connection->query("INSERT INTO `manufactures`(`manu_name`, `manu_img`) VALUES ('$name','$image')");
    }
    
    public function delete($id)
    {
        $sql = self::$connection->query("DELETE FROM `manufactures` WHERE  `manu_ID` = '$id'");
    }
    public function edit_manu($name, $image, $id)
    {
        $sql = self::$connection->query("UPDATE `manufactures` SET `manu_name`='$name',`manu_img`='$image' 
        WHERE `manu_ID` = '$id'");
    }
}