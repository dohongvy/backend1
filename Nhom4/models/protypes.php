<?php
class Protype extends Db{
   
    public function getProtype(){
        $sql = self::$connection->prepare("SELECT * FROM `protypes` order by `type_ID` desc");
        return $this->select($sql);
    }
    public function addNewProtype($name, $image)
    {
        $sql = self::$connection->query("INSERT INTO `protypes`(`type_name`, `type_img`) VALUES ('$name','$image')");
    }
    public function getProtypeByIdRight($id){
        $sql = self::$connection->prepare("SELECT * FROM `protypes` WHERE `type_ID` = ?");
        $sql->bind_param("i", $id);
        return $this->select($sql);
    }
    public function delete($id)
    {
        $sql = self::$connection->query("DELETE FROM `protypes` WHERE `type_ID` = '$id'");
    }
    public function edit_protype($name, $image, $id)
    {
        $sql = self::$connection->query("UPDATE `protypes` SET `type_name`='$name',`type_img`='$image' 
        WHERE `type_ID` = '$id'");
    }
}
