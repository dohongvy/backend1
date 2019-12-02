<?php
class User extends Db{
    public function getAllUsernameUser()
    {
        $sql = self::$connection->prepare("SELECT `username` FROM `users`");
        return $this->select($sql);
    }
    public function login($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE `username` =  '$username' 
        and `password` =  '$password'");
        return $this->select($sql);
    }
    public function register($username, $password, $last_name,$first_name)
    {
        $sql = self::$connection->query("INSERT INTO `users`( `username`, `password`,`last_name`,`first_name`) VALUES ('$username','$password','$last_name','$first_name')");
    }
    public function checkLogin($username)
    {
        $sql = self::$connection->prepare("SELECT `type` FROM `users` WHERE `username` = '$username'");
        return $this->select($sql);
    }
    public function getUser(){
        $sql = self::$connection->prepare("SELECT `id`,`username`,'password',`type`,`last_name`,`first_name` FROM `users` order by `id` desc");
        return $this->select($sql);
    }
      public function delete($id)
    {
        $sql = self::$connection->query("DELETE FROM `users` WHERE `id` = '$id'");
    }
    public function getUserById($id){
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE `id` = ?");
        $sql->bind_param("i", $id);
        return $this->select($sql);
    }
    public function editUser($username, $password, $type, $last_name, $first_name,$id)
    {
        $sql = self::$connection->query("UPDATE `users` SET `username`='$username',`password`='$password',`type`='$type',`last_name`='$last_name',`first_name`='$first_name' WHERE `id` = '$id'");
    }
     public function addNewUser($username, $password, $type, $last_name, $first_name)
    {
        $sql = self::$connection->query("INSERT INTO `users`( `username`, `password`, `type`, `last_name`, `first_name`) VALUES ('$username','$password','$type','$last_name','$first_name')");
    }
    public function getFullName($username){
        $sql = self::$connection->prepare("SELECT `last_name`,`first_name` FROM `users` WHERE `username` = '$username' ");
        return $this->select($sql);
    }

}




