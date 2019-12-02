<?php
class Products extends Db{
    // phuong thuc lay len tat ca san pham
    public function getAllProducts(){
        $sql = self::$connection->prepare("SELECT *
         FROM products join manufactures on products.manu_ID = manufactures.manu_ID
          join protypes on products.type_ID = protypes.type_ID
          order by ID desc");
        return $this->select($sql);
    }
    public function getProductById($id){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `ID` = ?");
        $sql->bind_param("i", $id);
        return $this->select($sql);
    }
    
    public function searchProductByName($searchName){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` like  '%$searchName%'");
        return $this->select($sql);
    }
    //Phan trang

    public function ListProduct($page,$per_page)
    {
        $first_link = ($page -1 ) * $per_page;
        $sql = self::$connection->prepare("SELECT * FROM `products` JOIN manufactures
        on products.manu_ID = manufactures.manu_ID order by ID desc LIMIT $first_link,$per_page");
       return $this->select($sql);
    }
    public function ListProductSearch($page,$per_page,$searchName)
    {
        $first_link = ($page -1 ) * $per_page;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` like  '%$searchName%'
         LIMIT $first_link,$per_page");
       return $this->select($sql);
    }

    public function phanTrang($base_url,$total_Row,$page,$per_page)
    {
        $total_Link = ceil($total_Row/$per_page);
        $link = "";
        for($i = 1; $i <= $total_Link; $i++)
        {
            $link = $link."<a href = ".$base_url."page=".$i.">".$i."</a>"." ";

        }
        return $link;
    }
    public function addNewProduct($name, $price, $image, $description, $manu_ID, $type_ID)
    {
        $sql = self::$connection->query("INSERT INTO `products`( `name`, `price`, `image`,
         `description`, `manu_ID`, `type_ID`) VALUES ('$name', '$price', '$image', '$description', '$manu_ID', '$type_ID')");
    }
    public function delete($id)
    {
        $sql = self::$connection->query("DELETE FROM `products` WHERE `ID` = '$id'");
    }
    public function editProduct($name, $price, $image, $description, $manu_ID, $type_ID, $id)
    {  
         if ($image = 0) {
             $sql = self::$connection->query("UPDATE `products` SET `name` = '$name', `price` = '$price', 
        `description` = '$description', `manu_ID` = '$manu_ID', `type_ID` = '$type_ID' WHERE `ID` = '$id'");
         }else{
        $sql = self::$connection->query("UPDATE `products` SET `name` = '$name', `price` = '$price', `image` = '$image',
        `description` = '$description', `manu_ID` = '$manu_ID', `type_ID` = '$type_ID' WHERE `ID` = '$id'");
         }
        
    }
}