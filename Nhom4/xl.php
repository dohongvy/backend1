<?php
session_start();
require "./config/database.php";
require "./models/Db.php";
require "./models/cart.php";

$k =$_GET['key'];
$n =$_GET['n'];
var_dump($_SESSION['cart'][$k]['qty']);


 if(isset($_POST['remove'])) {
    // if($_SESSION['cart'][$k]['qty'] > 1){
    //     $_SESSION['cart'][$k]['qty'] = $_SESSION['cart'][$k]['qty'] - 1;
    //     $_SESSION["cart"] = array_values($_SESSION["cart"]);
    // }
    // else{
        $key = array_search($k,$_SESSION['cart']);
        unset($_SESSION['cart'][$key]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
    // }
    
}
if(isset($_POST['pve'])) {
        $_SESSION['cart'][$k]['qty'] = $_SESSION['cart'][$k]['qty'] - 1;
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
}
if(isset($_POST['next'])) {
    $_SESSION['cart'][$k]['qty'] = $_SESSION['cart'][$k]['qty'] + 1;
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
}
if(isset($_POST['mua'])){
    $cart = new Cart();
    $n = $n -1;
    for($i = 1; $i <= $n ; $i++){
        $cart->addCart($_SESSION['session1'], $k, $_SESSION['cart'][$k]['qty']);
        echo "Mua thành công!!!";
    }
   
}
header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/cart.php");