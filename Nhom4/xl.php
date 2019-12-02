<?php
session_start();
require "./config/database.php";
require "./models/Db.php";
require "./models/cart.php";

$k =$_GET['key'];
$n =$_GET['n'];

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
    header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/cart.php");
    
}
if(isset($_POST['pve'])) {
        $_SESSION['cart'][$k]['qty'] = $_SESSION['cart'][$k]['qty'] - 1;
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
        header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/cart.php");
}
if(isset($_POST['next'])) {
    $_SESSION['cart'][$k]['qty'] = $_SESSION['cart'][$k]['qty'] + 1;
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/cart.php");
}
if(isset($_POST['mua'])){
     $cart = new Cart();
    // $n = $n -1;
    // for($i = 1; $i <= $n ; $i++){
    //     $cart->addCart($_SESSION['session1'], $k, $_SESSION['cart'][$k]['qty']);
    //     echo "Mua thành công!!!";
    // }
    $date = getdate();
    $a = $date['year']. '/' .  $date['mon']. '/' .  $date['mday'] ;

    $cart->addBill($_SESSION['session1'], $a, $_SESSION['tien']);

    $id_bill = $cart->getId_Bill()[0]["ID_Bill"];
    foreach($_SESSION['cart'] as $key => $value){
        $cart->addProductInCart($id_bill, $value['name'], $value['qty'] );
    }
    unset($_SESSION['cart']);
    unset($_SESSION['tien']); 
    $_SESSION['success'] = 1;
    header("Location: http://localhost:82/LapTrinhWeb1/Nhom4/home.php");
}
